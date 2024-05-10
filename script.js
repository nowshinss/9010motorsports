function openModal() {
    var modal = document.getElementById("success-modal");
    modal.style.display = "block";
}

function closeModal() {
    var modal = document.getElementById("success-modal");
    modal.style.display = "none";
}

function toggleAnswer(answerId) {
    var answer = document.getElementById(answerId);
    answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
}
