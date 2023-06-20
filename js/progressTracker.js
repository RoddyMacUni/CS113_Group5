const getCookie = (cookieKey) => {
    let name = cookieKey + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  const setCookie = (cookieKey, cookieValue) => {
    const date = new Date();
    date.setTime(date.getTime() + (999*24*60*60*1000));
    let expires = "expires="+ date.toUTCString();
    document.cookie = cookieKey + "=" + cookieValue + ";" + expires + ";path=/";
  }

  //THIS ENTIRE XP SYSTEM WILL BE REWORKED FOR FUTURE MILESTONE
  const incrementProgress = (type) => {
    let currentProgress = getCookie("userProgress")
    let split = currentProgress.split(",")
    let HTMLprogress = parseInt(split[0].replace("HTML:", ""))
    let CSSprogress = parseInt(split[1].replace("CSS:", ""))

    //ONLY 1 LESSON IN CURRENT IMPLEMENTATION, SO ONLY ALLOW PROGRESS = 1
    if(type.toUpperCase() === "HTML" && HTMLprogress <= 0)
        HTMLprogress += 1
    if(type.toUpperCase() === "CSS" && CSSprogress <= 0)
        CSSprogress += 1

    setCookie("userProgress", "HTML:"+HTMLprogress+","+"CSS:"+CSSprogress)
  }

  const getProgress = (type) => {
    let currentProgress = getCookie("userProgress")
    let split = currentProgress.split(",")
    let HTMLprogress = parseInt(split[0].replace("HTML:", ""))
    let CSSprogress = parseInt(split[1].replace("CSS:", ""))

    if(type.toUpperCase() === "HTML") {
        return HTMLprogress
    } else if(type.toUpperCase() === "CSS") {
        return CSSprogress
    } else {
        return 0
    }
    
  }

  const updateXP = (amount) => {
    let currentXP = getCookie("userXP")
    setCookie("userXP", currentXP + amount)
  }

  $(window).on("load", function() {
    //HANDLE COOKIE INITIALIZATION
    if(getCookie("userProgress") === "")
        setCookie("userProgress", "HTML:0,CSS:0")
    if(getCookie("userXP") === "")
        setCookie("userXP", "0")
    
    $("#celebrationToast").html("")

    //CHECKBOX LISTENERS FOR WHEN USER FINISHES A LESSON
    //THIS WILL BE REFINED IN FUTURE MILESTONES, WILL STREAMLINE THIS PROCESS SO IT ISNT SEPARATE FOR CSS AND HTML LESSONS
    $("#htmlLessonCheckbox").change(function() {
        if(this.checked) {
            incrementProgress("HTML")
            let HTMLprogress = getProgress("HTML")
            let CSSprogress = getProgress("CSS")
            $("#celebrationToast").html(`<p class='success'>Congratulations! You have completed Lesson 1 on HTML!<br>Current Progress: <br>HTML: ${HTMLprogress}<br>CSS: ${CSSprogress}</p>`)
            $("#celebrationToast").focus()
        } else {
            $("#celebrationToast").html("")
        }
      })

      $("#cssLessonCheckbox").change(function() {
        if(this.checked) {
            incrementProgress("CSS")
            let HTMLprogress = getProgress("HTML")
            let CSSprogress = getProgress("CSS")
            $("#celebrationToast").html(`<p class='success'>Congratulations! You have completed Lesson 1 on HTML!<br>Current Progress: <br>HTML: ${HTMLprogress}<br>CSS: ${CSSprogress}</p>`)
            $("#celebrationToast").focus()
        } else {
            $("#celebrationToast").html("")
        }
      })
  })

