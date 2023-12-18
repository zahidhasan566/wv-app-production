function openTab(tabName) {
  var i, tabContent, tabLinks;

  // Hide all tab content
  tabContent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }

  // Remove the "active-tab" class from all tabs
  tabLinks = document.getElementsByClassName("tab");
  for (i = 0; i < tabLinks.length; i++) {
    tabLinks[i].classList.remove("active-tab");
  }

  // Show the specific tab content
  document.getElementById(tabName).style.display = "block";

  // Add the "active-tab" class to the clicked tab
  event.currentTarget.classList.add("active-tab");
}

// Trigger click event on the first tab to make it active by default
document.querySelector(".tab").click();
