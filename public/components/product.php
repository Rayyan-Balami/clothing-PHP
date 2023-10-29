if (product.length === 0) {
    const comingSoonElement = document.createElement('div');
    comingSoonElement.textContent = 'Coming Soon';
    container.appendChild(comingSoonElement);
    return;
}

product.forEach(rowData => {
                const cardHTML = createCardHTML(rowData);
                const cardElement = createCardElement(cardHTML);
                container.appendChild(cardElement);
            });
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });

        

    // Function to process JSON data and extract relevant fields
    function processJSONData(data) {
        const responseText = data.substring(data.indexOf('(', 0) + 1, data.lastIndexOf(')'));
        const jsonResponse = JSON.parse(responseText);

        if (jsonResponse && jsonResponse.status === 'ok' && jsonResponse.table && jsonResponse.table.rows) {
            return jsonResponse.table.rows.map(row => {
                return {
                    name: row.c[1] ? row.c[1].v : '', // Map to the second column (B in spreadsheet, index 1)
                    image: row.c[2] ? row.c[2].v : '', // Map to the third column (C in spreadsheet, index 2)
                    description: row.c[3] ? row.c[3].v : '', // Map to the fourth column (D in spreadsheet, index 3)
                    category: row.c[4] ? row.c[4].v : '', // Map to the fifth column (E in spreadsheet, index 4)
                    size: row.c[5] ? row.c[5].v : '', // Map to the sixth column (F in spreadsheet, index 5)
                    color: row.c[6] ? row.c[6].v : '', // Map to the seventh column (G in spreadsheet, index 6)
                    price: row.c[7] ? row.c[7].v : '', // Map to the eighth column (H in spreadsheet, index 7)
                    lastUpdate: row.c[8] ? row.c[8].v : '' // Map to the ninth column (I in spreadsheet, index 8)
                };
            });
        } else {
            return [];
        }
    }

    // Function to create an element from HTML
    function createCardElement(cardHTML) {
        const cardElement = document.createElement('div');
        cardElement.innerHTML = cardHTML;
        return cardElement;
    }

    // Function to create HTML for a product card
    function createCardHTML(data) {
        return `
            <div class="group">
                <div class="aspect-square overflow-hidden rounded-lg">
                    <img src="${data.image}" alt="${data.description}" class="h-full w-full object-cover object-center group-hover:brightness-75 duration-300">
                </div>
                <h3 class="mt-4 text-base">${data.name}</h3>
                <div class="flex items-center justify-between mt-1 opacity-80 text-base">
                    <p>${data.color}</p>
                    <p>${data.size}</p>
                    <p class="font-semibold" >Rs ${data.price}</p>
                </div>
            </div>
        `;
    }
</script>
</body>
</html>
