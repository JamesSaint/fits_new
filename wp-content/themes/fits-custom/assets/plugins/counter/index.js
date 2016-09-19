function checkYT() {
    if ($("#id_alarm option:selected").val() === "9") {
        $("#id_youtube").show();
        $("#id_test").prop("disabled", true)
    } else {
        $("#id_youtube").hide()
    }
}
function checkNone() {
    if ($("#id_alarm option:selected").val() !== "0") {
        $("#id_duration").prop("disabled", false);
        $("#id_test").prop("disabled", false)
    } else {
        $("#id_duration").prop("disabled", true);
        $("#id_test").prop("disabled", true)
    }
}
function runCountx() {
    checkNone();
    checkYT();
    $("#id_alarm").change(function() {
        checkNone();
        checkYT()
    })
}
function setTest() {
    $("#id_test").click(function(x) {
        x.preventDefault();
        $.getScript("//cdn.jsdelivr.net/soundmanager2/2.97a.20131201/soundmanager2-nodebug-jsmin.js", function() {
            soundManager.setup({
                url: "//cdn.jsdelivr.net/soundmanager2/2.97a.20131201/",
                onready: function() {
                    sound = soundManager.createSound({
                        id: "alarm",
                        url: "/static/main/alarm/" + $("#id_alarm").val() + ".mp3"
                    });
                    sound.play()
                }
            })
        })
    })
}

