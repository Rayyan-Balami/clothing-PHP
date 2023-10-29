<!-- header starts here -->
<?php include 'components/header.php'; ?>
<!-- header ends here -->

<!-- tops category -->
<?php include 'components/tops_category.php'; ?>
<!-- tops category end -->

<!-- Main content starts here -->
<?php include 'components/main.php'; ?>
<!-- Main content ends here -->

<!-- mobile navbars starts here -->
<?php include 'components/mobile_Navbar.php'; ?>
<!-- mobile navbars ends here -->

<!-- script to make the current page active in the header (Home) -->
<script>
    document.getElementById("tops").classList.add("border-b-2", "border-black", "dark:border-white", "bg-gray-100", "dark:bg-gray-700");//for desktop navbar
    document.getElementById("all-top").classList.add("border-b-2", "border-black", "dark:border-white"); //for mobile navbar because ids are unique

    document.getElementById("t-shirts").classList.add("border-b-2", "border-black", "dark:border-white", "bg-gray-100", "dark:bg-gray-700"); //for desktop navbar
    document.getElementById("t-shirt").classList.add("border-b-2", "border-black", "dark:border-white");  //for mobile navbar because ids are unique

</script>
<script>
    // Fetch data from Google Sheets
    const SHEET_ID = '1AXJ77u2af1Ub5Zx1oU50MapipGxGRCub45QUlmYlYA4';
    const SHEET_TITLE = 'products list';
    const SHEET_RANGE = 'A2:I'; // Fetch from column A to I
    const FULL_URL = `https://docs.google.com/spreadsheets/d/${SHEET_ID}/gviz/tq?sheet=${SHEET_TITLE}&range=${SHEET_RANGE}`;

    fetch(FULL_URL)
        .then(response => response.text())
        .then(data => {
            const jsonData = processJSONData(data);
            const container = document.getElementById('container');

            // Reverse the order of the rows
            const reversedData = jsonData.slice().reverse();

            // Filter and only display products whose category is T-Shirt or Shirt or Hoodie ie. Tops
            const product = reversedData.filter(product => product.category === 'T-Shirt');

            // Fetch data from Google Sheets and include the product.php file beacuse it handles it
            <?php include 'components/product.php'; ?>