
    
document.addEventListener('DOMContentLoaded', function() {
    let clickedCount = 0; 
    const VIPContainer = document.getElementById('VIP-container');
    const output1Element = document.getElementById('output1');
    const seat = document.getElementById('rowSeat');
    const totalAmountCell = document.getElementById("totalAmount");
    const SeatType = document.getElementById('vip-seat').textContent;

    const numberOfRows = 15;
    const numberOfColumns = 22;

    const clickedTitles = [];
    const SeatLocation = document.getElementById('SeatLocation');
    const VIPSeatsButton = document.getElementById('VIP-select');
    const VIPprice = document.getElementById('VIP-price');
    const counterElement = document.getElementById('counter');
    const outputElement = document.getElementById('output');

    VIPSeatsButton.addEventListener('click', function() {
        const PriceValue = parseInt(VIPprice.textContent.replace(/[^\d]/g, ''));          
        outputElement.textContent = `₱${PriceValue.toLocaleString()}`;
        SeatLocation.textContent = SeatType;

        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    const tooltip = new bootstrap.Tooltip(tooltipTriggerEl);
                    tooltipTriggerEl.addEventListener('mouseleave', () => {
                        tooltip.hide();
                    });
                    tooltipTriggerEl.addEventListener('click', () => {
                        if (tooltipTriggerEl.classList.contains('clicked')) {
                            clickedCount++; 
                        } else {
                            clickedCount--;
                        }
                        const clickedCounterElement = document.getElementById('counter');
                        clickedCounterElement.textContent = clickedCount;
                    });
                    return tooltip;
        });
                 
        
    });   

    for (let row = 1; row <= numberOfRows; row++) {
        for (var col = numberOfColumns; col >= 1; col--) {
            const button = document.createElement('button');
            button.textContent = '';
            button.classList.add('box');            
            button.setAttribute('data-bs-toggle', 'tooltip');
            button.setAttribute('data-bs-placement', 'top');
            button.setAttribute('data-bs-custom-class', 'custom-tooltip');
            button.setAttribute('data-bs-title', `${SeatType} RR${row} S${col}`);
            button.addEventListener('click', () => {
            if (button.classList.contains('clicked')) {
                button.classList.remove('clicked');
            } else {
                button.classList.add('clicked');
            }
            seat.textContent = button.getAttribute('data-bs-title');
        });
        VIPContainer.appendChild(button);
        }
    }

    const selectedSeatsBody = document.getElementById("seat-table");
    const boxButtons = document.querySelectorAll('.box');
    boxButtons.forEach(button => {
        button.addEventListener('click', function() {
            const clickedCount = parseInt(counterElement.textContent);
            const PriceValue = parseInt(VIPprice.textContent.replace(/[^\d]/g, ''));
            const totalPrice = PriceValue * clickedCount;
            output1Element.textContent = `₱${totalPrice.toLocaleString()}`;
                var title = button.getAttribute("data-bs-title");
                var amount = PriceValue;
                    
                var seatIndex = clickedTitles.findIndex(seat => seat.title === title);
                if (seatIndex === -1) {
                   clickedTitles.push({ title: title, amount: amount});
                } else {
                    clickedTitles.splice(seatIndex, 1);
                }
            });
        });
    
        const confirmSeatButton = document.getElementById('confirmSeat');
        confirmSeatButton.addEventListener('click', function() {
        selectedSeatsBody.innerHTML = "";
        var totalAmount = 0;
        clickedTitles.forEach(function(seat) {
            var newRow = selectedSeatsBody.insertRow();
            var cellTitle = newRow.insertCell(0);
            cellTitle.textContent = seat.title;
            var cellAmount = newRow.insertCell(1);
            cellAmount.textContent = "₱" + seat.amount.toLocaleString();
            totalAmount += seat.amount;
            totalAmountCell.textContent = "₱" + totalAmount.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
            });
        });
        
});