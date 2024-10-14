export function setupTabs() {
  const tabs = document.querySelectorAll(".tab");

  console.log("IS THIS CALLED");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      var activeTab = document.querySelectorAll(".tab.active");
      activeTab.forEach((activeTab) => {
        if (activeTab.classList) {
          activeTab.classList.remove("active");
        } else {
          console.error("classList is not accessible or activeTab is null.");
        }
      });

      tab.classList.add("active");
    });
  });
}

export function navigateToURL(urlName){
  const currentUrl = window.origin + window.location.pathname;

  return window.location.href = currentUrl + urlName;
}