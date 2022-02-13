
window.addEventListener('DOMContentLoaded', () =>{
    var cells = Array.from(document.querySelectorAll(".cell"));
    // cells.forEach(el => el.innerText = el.id); // <--- For Debugging
    
    
    var color = "#333"; // Default logo color
    function selectRandom(cells, color) {
        let totalCell = cells.length; 
        let leftCells = cells.slice(0,totalCell/2);
        let rightCells = cells.slice(totalCell/2,totalCell);
        let idx = Math.floor(Math.random() * leftCells.length);
        leftCells[idx].style.backgroundColor = color;
        rightCells[idx].style.backgroundColor = color;
        // leftCells.splice(idx, 1) 
        // rightCells.splice(idx, 1)
    }
    // Select random cells n number of times
    function draw(n) {
        cells.forEach(el => el.style.backgroundColor = "transparent");       
        for (let i = 0; i < n; i++) selectRandom(cells, color);
    }

    // Click Event on Generate Button
    document.getElementById("randomize__btn").addEventListener("click", () => draw(19));
    
    // Logo Color changer
    var colorPicker = document.getElementById("color__picker");
    colorPicker.addEventListener("change", (e) => {
        cells.forEach(cell => {
            if (cell.style.backgroundColor != "transparent") {
                color = e.target.value;
                cell.style.backgroundColor = color;
            }
        });
    })
    
    draw(19); // Draws a logo on page load
    
    // --- Downloader ---
    var logo = document.getElementById('box');
    document.getElementById('download__btn').addEventListener("click", () => {
        domtoimage.toPng(logo)
        .then(function (dataUrl) {
            var link = document.createElement('a');
            link.href = dataUrl;
            link.download = 'logo.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        })
        .catch(function (error) {
            console.error('oops, something went wrong!', error);
        })
    });
})
