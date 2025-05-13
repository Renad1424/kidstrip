var childrenCount = document.getElementById('childrenCount');



childrenCount.addEventListener('change', function () {
    var Cost = document.getElementById('totalCost');
    
    var childrenValue = this.value;
    var total = childrenValue * Cost.textContent;
    Cost.innerHTML = total;
})