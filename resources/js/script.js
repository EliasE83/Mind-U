document.getElementById('perfilImg').addEventListener('click', function() {
    document.getElementById('perfilInput').click();
});

document.getElementById('perfilLabel').addEventListener('click', function() {
    document.getElementById('perfilInput').click();
});
document.getElementById('perfilInput').addEventListener('change', function() {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('perfilImg').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});


document.addEventListener('DOMContentLoaded', (event) => {
    const checkbox = document.getElementById('flexSwitchCheckChecked');

    function updateCheckboxLetter() {
        if (checkbox.checked) {
            checkbox.setAttribute('data-letter', 'A');
        } else {
            checkbox.setAttribute('data-letter', 'V');
        }
    }

    checkbox.addEventListener('change', updateCheckboxLetter);

    updateCheckboxLetter();
});