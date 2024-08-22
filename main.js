// Add JS here
document.getElementById("add-task").addEventListener("click", function() {
    let task = document.getElementById("new-task").value;
    if (task !== "") {
        let li = document.createElement("li");
        li.textContent = task;
        document.getElementById("tasks").appendChild(li);
        document.getElementById("new-task").value = "";
    }
});

document.querySelectorAll("#tasks li").forEach(function(item) {
    item.addEventListener("click", function() {
        this.remove();
    });
});