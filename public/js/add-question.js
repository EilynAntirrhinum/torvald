document.addEventListener("DOMContentLoaded", () => {
    const addQuestionButton = document.querySelector("#add-question-btn"),
        test = document.querySelector("#test")

    addQuestionButton.addEventListener("click", (e) => {
        e.preventDefault();
        test.insertAdjacentHTML("beforeend", createQuestion())
    })

    function createQuestion() {
        return `
            <div class="question">
                <div class="inputs">
                    <input type="text" name="question" class="input-question" placeholder="Вопрос">
                </div>
                <div class="radio-answers">
                    <div class="radio-answers-inside">
                        <input type="radio" name="radio-answer[]" class="radio-answer">
                        <input type="text" name="input-answer[]" class="input-answer" placeholder="Вариант ответа">
                    </div>
    
                    <div class="cbs-inputs-answers-inside">
                        <input type="radio" name="radio-answer[]" class="radio-answer">
                        <input type="text" name="input-answer[]" class="input-answer" placeholder="Вариант ответа">
                    </div>
    
                    <div class="cbs-inputs-answers-inside">
                        <input type="radio" name="radio-answer[]" class="radio-answer">
                        <input type="text" name="input-answer[]" class="input-answer" placeholder="Вариант ответа">
                    </div>
    
                    <div class="cbs-inputs-answers-inside">
                        <input type="radio" name="radio-answer[]" class="radio-answer">
                        <input type="text" name="input-answer[]" class="input-answer" placeholder="Вариант ответа">
                    </div>
                </div>
            </div>`
    }
})