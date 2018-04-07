<?php
/*
-- the SQL database table
create table form_ajax (
    ID varchar(5) not null,
    Name varchar(100),
    Address varchar(100),
    Phone varchar(20),
    Email varchar(255),
    constraint form_ajax_pk primary key (ID)
);
-- the data
insert into form_ajax(ID, Name, Address, Phone, Email)
values('123', 'Test Only', '123 Smith Street Jonestown 2000 NSW', '0123456789', 'test@example.com');
*/
// simplified to provide an example; deal with non-standards browsers yourself
// please use some common sense and add more structure, error handling, etc.
// NB: the PHP stuff is all server side, and is the AJAX service
// check for AJAX request
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'fetch') {
        // tell the browser what's coming
        header('Content-type: application/json');
        // open database connection
        $db = new PDO('mysql:dbname=test;host:localhost;', 'website', 'website');
        // use prepared statements!
        $query = $db->prepare('select * from form_ajax where ID = ?');
        $query->execute(array($_GET['ID']));
        $row = $query->fetch(PDO::FETCH_OBJ);
        // send the data encoded as JSON
        echo json_encode($row);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en-au">
<head>
<meta charset="utf-8" />
<title>Form from AJAX</title>

<script>
// NB: the JavaScript stuff here is all client side and is the AJAX client
// encapsulate the lot within a function scope called on document ready
window.addEventListener("DOMContentLoaded", function() {
    // hook the submit action on the form
    var frm = document.getElementById("form-ajax");
    frm.addEventListener("submit", frm_submit, false);
    /**
    * function to handle form submit, and request data from server
    * @param {Event} event
    */
    function frm_submit(event) {
        // stop the form submitting
        event.preventDefault();
        // grab the ID and send AJAX request if not (empty / only whitespace)
        var ID = this.elements.ID.value;
        if (/\S/.test(ID)) {
            ajax_request(this.action, {"action" : "fetch", "ID" : ID}, process_response);
        }
        else {
            alert("No ID supplied");
        }
    }
    /**
    * send an ajax request, with successful response handled by callback
    * @param {String} url the url to send the request to
    * @param {Object} data map of the data that we'll send
    * @param {Function} callback the function that will process the AJAX response
    */
    function ajax_request(url, data, callback) {
        var i, parts, xhr;
        // if data is an object, unroll as HTTP post data (a=1&b=2&c=3 etc.)
        if (typeof data == "object") {
            parts = [];
            for (i in data) {
                parts.push(encodeURIComponent(i) + '=' + encodeURIComponent(data[i]));
            }
            data = parts.join("&");
        }
        // create an XML HTTP Request object
        xhr = new XMLHttpRequest();
        if (xhr) {
            // set a handler for changes in ready state
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    // check for HTTP status of OK
                    if (xhr.status == 200) {
                        try {
                            callback(JSON.parse(xhr.responseText));
                        }
                        catch(e) {
                            console.log(xhr.responseText);      // for debug
                            alert("AJAX request incomplete:\n" + e.toString());
                        }
                    }
                    else {
                        alert("AJAX request failed: " + xhr.status);
                    }
                }
            };
            // open connection and send payload
            xhr.open("GET", url + "?" + data, true);
            xhr.send(null);
        }
    }
    /**
    * process the response, populating the form fields from the JSON data
    * @param {Object} response the JSON data parsed into an object
    */
    function process_response(response) {
        var frm = document.getElementById("form-ajax");
        var i;
        console.dir(response);      // for debug
        for (i in response) {
            if (i in frm.elements) {
                frm.elements[i].value = response[i];
            }
        }
    }
}, false);
</script>

</head>

<body>

    <form id="form-ajax" action="form-ajax.php">
        <label>ID:</label><input type="text" name="ID" /><br />
        <label>Name:</label><input type="text" name="Name" /><br />
        <label>Address:</label><input type="text" name="Address" /><br />
        <label>Phone:</label><input type="text" name="Phone" /><br />
        <label>Email:</label><input type="email" name="Email" /><br />
        <input type="submit" value="fill from db" />
    </form>

</body>

</html>
