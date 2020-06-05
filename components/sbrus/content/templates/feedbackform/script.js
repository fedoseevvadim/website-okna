function submitFeedBackForm ( ) {

    let formData    = new FormData();

    formData.append('NAME', document.getElementById('name').value);
    formData.append('EMAIL', document.getElementById('email').value);
    formData.append('PHONE', document.getElementById('phone').value);
    formData.append('ML', document.getElementById('ml').value);
    formData.append('TEXT', document.getElementById('text').value);

    console.log(name);

    $.ajax({
        url:  "/local/components/sbrus/content/templates/feedbackform/ajax.php",
        data: formData,
        processData: false,
        contentType: false,
        type: 'post',
        success: function() {
            alert('Спасибо, Мы с вами свяжемся!');
        }
    });

}