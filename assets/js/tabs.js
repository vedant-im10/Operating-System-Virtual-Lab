function showTab(tab) {
    document.querySelectorAll('.tab-view').forEach(view => {
        view.style.display = "none";
    });
    document.querySelector(`#${tab}`).style.display = "block";
}

document.addEventListener('DOMContentLoaded', function() {
    
    document.querySelectorAll('.tab').forEach(tab => {
        tab.onclick = function() {
            showTab(this.dataset.tab);
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active-tab');
            });
            document.querySelector(`[data-tab=${this.dataset.tab}`).classList.add('active-tab');
        }
    });
});