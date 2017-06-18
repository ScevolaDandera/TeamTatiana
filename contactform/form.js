$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
    console.log("called for actual function");
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
    var subject = $("#subject").val();
 
    $.ajax({
        type: "POST",
        url: "form-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message + "&subject=" + subject,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}