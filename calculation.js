var bmrVal;
var tdeeVal;

function bmr(gender, weight, feet, inches, age){
  if (gender == female){
    bmrVal = 655;
    bmrVal += (9.6*weight*2.20462) + (1.8*((feet*12) + inches) * 2.54)
    bmrVal -= (4.7 * age)
  } else {
    bmrVal = 66;
    bmrVal += (13.7*weight*2.20462) + (5*((feet*12) + inches) * 2.54)
    bmrVal -= (6.8 * age)
  }


}

function tdee(activityLevel, bmrVal){
  tdeeVal = activityLevel * bmrVal;
}
