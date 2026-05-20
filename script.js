document.addEventListener("DOMContentLoaded", function() {
    
    // FAQ Accordion Interactivity
    const faqQuestions = document.querySelectorAll(".faq-question");

    faqQuestions.forEach(question => {
        question.addEventListener("click", function() {
            const answer = this.nextElementSibling;
            const icon = this.querySelector("i");
            
            // Toggle open class
            if (answer.style.display === "block") {
                answer.style.display = "none";
                icon.style.transform = "rotate(0deg)";
            } else {
                answer.style.display = "block";
                icon.style.transform = "rotate(180deg)";
            }
        });
    });
});

const selectWrapper = document.querySelector('.custom-select-wrapper');
const selectTrigger = document.querySelector('.custom-select-trigger');
const customOptions = document.querySelectorAll('.custom-option');
const hiddenInput = document.getElementById('selected-service');


selectTrigger.addEventListener('click', function() {
    selectWrapper.classList.toggle('open');
});


customOptions.forEach(option => {
    option.addEventListener('click', function() {
        
        document.querySelector('.custom-option.selected')?.classList.remove('selected');
        this.classList.add('selected');
        selectTrigger.querySelector('span').textContent = this.textContent;
        hiddenInput.value = this.getAttribute('data-value'); 
        selectWrapper.classList.remove('open'); 
    });
});


window.addEventListener('click', function(e) {
    if (!selectWrapper.contains(e.target)) {
        selectWrapper.classList.remove('open');
    }
});