$(document).ready(function(){
    $.ajax({
        type: 'GET',
        url: 'php\profile.php',
        success: function(response){
            var profileData = JSON.parse(response);
            $('.top .box p b').eq(0).text(profileData.username);
            $('.top .box p b').eq(1).text(profileData.email);
            $('.bottom .box p b').text(profileData.age + ' years old');
        },
        error: function(xhr, status, error){
            console.error(xhr.responseText);
        }
    });
});
