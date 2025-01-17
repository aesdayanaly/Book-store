<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="css/confrimation.css">
</head>
<body>
    <div class="confirmation-container">
        <h1>Thank You for Your Purchase!</h1>
        <p>Your order has been successfully placed.</p>
        <p>We appreciate your business and hope to see you again soon!</p>

        <button class="btn" onclick="generateReceipt()">Download Receipt</button>

        <a class="btn" href="dashboard.php">Continue Shopping</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        async function generateReceipt() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            doc.setFont("Helvetica", "bold");
            doc.setFontSize(20);
            doc.text("Order Receipt", 105, 20, { align: "center" });

            doc.setFontSize(12);
            doc.text("Thank you for your purchase!", 105, 30, { align: "center" });
            doc.text("Order Summary", 20, 50);

            const items = [
                { title: "The Duke and I", author: "Julia Quinn", price: 15.00 }
            ];

            let yPosition = 60;
            let total = 0;

            doc.text("Title", 20, yPosition);
            doc.text("Author", 90, yPosition);
            doc.text("Price", 160, yPosition);

            yPosition += 10;

            items.forEach(item => {
                doc.text(item.title, 20, yPosition);
                doc.text(item.author, 90, yPosition);
                doc.text(`$${item.price.toFixed(2)}`, 160, yPosition);
                yPosition += 10;
                total += item.price;
            });

            doc.setFont("Helvetica", "bold");
            doc.text("Total:", 130, yPosition + 10);
            doc.text(`$${total.toFixed(2)}`, 160, yPosition + 10);

            doc.save("receipt.pdf");
        }
    </script>
</body>
</html>
