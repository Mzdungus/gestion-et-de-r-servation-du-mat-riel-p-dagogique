const fileInput = document.getElementById('image');
const profilePic = document.getElementById('profilePic');

fileInput.addEventListener('change', function() {
    const file = fileInput.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        profilePic.setAttribute('src', e.target.result);
    }

    reader.readAsDataURL(file);
});
