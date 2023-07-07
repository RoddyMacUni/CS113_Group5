
//START OF KEYBOARD NAVIGATION//
let currentPage = location.href.split('/')[5].replace('.php', '')

let nextPages = {
  "index": "about-us",
  "about-us": "learn",
  "learn": "parent-zone",
  "parent-zone": "login",
  "login": "index"
}

$(document).on("keyup", function (e) {
  if (e.key == "ArrowRight") {
    for (const [k, v] of Object.entries(nextPages)) {
      if (k == currentPage) {
        var dest = location.href.replace(k, v);
        currentPage = v;
        location.href = dest;
        break;
      }
    }
  }

  if (e.key == "ArrowLeft") {
    for (const [k, v] of Object.entries(nextPages)) {
      if (v == currentPage) {
        var dest = location.href.replace(v, k);
        currentPage = k;
        location.href = dest;
        break;
      }
    }
  }
});

//END OF KEYBOARD NAVIGATION

//START OF COOKIE HANDLING//
const getCookie = (cookieKey) => {
  let name = cookieKey + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
};

const setCookie = (cookieKey, cookieValue) => {
  const date = new Date();
  date.setTime(date.getTime() + 999 * 24 * 60 * 60 * 1000);
  let expires = "expires=" + date.toUTCString();
  document.cookie = cookieKey + "=" + cookieValue + ";" + expires + ";path=/";
};

//END OF COOKIE HANDLING

//START OF XP SYSTEM
const incrementProgress = (type) => {
  let currentProgress = getCookie("userProgress");
  let split = currentProgress.split(",");
  let HTMLprogress = parseInt(split[0].replace("HTML:", ""));
  let CSSprogress = parseInt(split[1].replace("CSS:", ""));

  //ONLY 1 LESSON IN CURRENT IMPLEMENTATION, SO ONLY ALLOW PROGRESS = 1
  if (type.toUpperCase() === "HTML" && HTMLprogress <= 0) HTMLprogress += 1;
  if (type.toUpperCase() === "CSS" && CSSprogress <= 0) CSSprogress += 1;

  setCookie(
    "userProgress",
    "HTML:" + HTMLprogress + "," + "CSS:" + CSSprogress
  );
};

const getProgress = (type) => {
  let currentProgress = getCookie("userProgress");
  let split = currentProgress.split(",");
  let HTMLprogress = parseInt(split[0].replace("HTML:", ""));
  let CSSprogress = parseInt(split[1].replace("CSS:", ""));

  if (type.toUpperCase() === "HTML") {
    return HTMLprogress;
  } else if (type.toUpperCase() === "CSS") {
    return CSSprogress;
  } else {
    return 0;
  }
};

const updateXP = (amount) => {
  let currentXP = getCookie("userXP");
  setCookie("userXP", currentXP + amount);
};

//END OF XP SYSTEM

$(window).on("load", function () {
  //HANDLE COOKIE INITIALIZATION
  if (getCookie("userProgress") === "")
    setCookie("userProgress", "HTML:0,CSS:0");
  if (getCookie("userXP") === "") setCookie("userXP", "0");

  $("#celebrationToast").html("");

  $("#cssLessonCheckbox").change(function () {
    if (this.checked) {
      incrementProgress("CSS");
      let HTMLprogress = getProgress("HTML");
      let CSSprogress = getProgress("CSS");
      $("#celebrationToast").html(
        `<p class='success'>Congratulations! You have completed Lesson 1 on HTML!<br>Current Progress: <br>HTML: ${HTMLprogress}<br>CSS: ${CSSprogress}</p>`
      );
      $("#celebrationToast").focus();
    } else {
      $("#celebrationToast").html("");
    }
  });

  $("#htmlLesson1Quiz").submit(function (e) {
    e.preventDefault();
    let q1 = false;
    let q2 = false;
    $(".lessonQuizQuestionInput").each(function (i) {
      switch (i) {
        case 0:
          var text = $(this).val().toLowerCase().trim().split(" ").join("");
          if (text === "hypertextmarkuplanguage") {
            q1 = true
          } else {
            q1 = false
          }
          break;
        case 1:
          var text = $(this).val().toLowerCase().trim().replace(" ", "").replace("<", "").replace(">", "")
          if (text === "img") {
            q2 = true
          } else {
            q2 = false
          }
          break;
      }
      if (q1 && q2) {
        incrementProgress("HTML");
        let HTMLprogress = getProgress("HTML");
        let CSSprogress = getProgress("CSS");
        $("#celebrationToast").html(
          `<p class='success'>Congratulations! You have completed Lesson 1 on HTML!<br>Current Progress: <br>HTML: ${HTMLprogress}<br>CSS: ${CSSprogress}</p>`
        );
        $("#celebrationToast").focus();
      } else {
        $("#celebrationToast").html(
          `<p class='error'>Check your answers and try again</p>`
        );
      }
    });
  });




  $("#cssLesson1Quiz").submit(function (e) {
    e.preventDefault();
    let correct = false;
    $(".lessonQuizQuestionInput").each(function (i) {
      switch (i) {
        case 0:
          var text = $(this).val().toLowerCase().trim().split(" ").join("");
          if (text === "cascadingstylesheet" || text === "cascadingstylesheets") {
            correct = true
          } else {
            correct = false
          }
          break;
        case 1:
          var text = $(this).val().toLowerCase().trim().replace(" ", "").replace("<", "").replace(">", "")
          if (text === "color") {
            correct = true
          } else {
            correct = false
          }
          break;
      }
      if (correct) {
        incrementProgress("CSS");
        let HTMLprogress = getProgress("HTML");
        let CSSprogress = getProgress("CSS");
        $("#celebrationToast").html(
          `<p class='success'>Congratulations! You have completed Lesson 1 on HTML!<br>Current Progress: <br>HTML: ${HTMLprogress}<br>CSS: ${CSSprogress}</p>`
        );
        $("#celebrationToast").focus();
      } else {
        $("#celebrationToast").html(
          `<p class='error'>Check your answers and try again</p>`
        );
      }
    });
  });
});