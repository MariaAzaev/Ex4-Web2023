window.onload = () => {
  const interests = document.querySelectorAll('input[name="interests[]"]');
  let minChosenInterests = 3;
  let SelectedInterests = 0;
  let i = 0;

  if(i < interests.length)
  {
    i++;
    if(interests[i].checked){
      SelectedInterests++;
    }
  }

  if (SelectedInterests < minChosenInterests) {
    alert("Error - Choose minimum 3");
  }
}
