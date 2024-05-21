
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        text-align: center;
        padding: 50px;
    }
    .status-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    h1 {
        color: #333;
    }
    p {
        color: #666;
        font-size: 18px;
        line-height: 1.6;
    }
    .status {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .status-icon {
        font-size: 40px;
        color: #007bff;
        margin-bottom: 20px;
    }
    .go-back {
        margin-top: 30px;
        text-align: center;
    }
    </style>
    </head>
    <body>
    <div class="status-container">
        <h1>Order Status</h1>
        <div class="status">
            <div class="timeline-item">Day 1: Order Confirmed</div>
        <div class="status-icon">&#x2714;</div>
        <p>Your order has been confirmed and is being processed.</p>
        </div>
        <div class="status">
            <div class="timeline-item">Day 2: Items Prepared for Shipment</div>
        <div class="status-icon">&#x1f4e6;</div>
        <p>Your items are currently being prepared for shipment.</p>
        </div>
        <div class="status">
            <div class="timeline-item">Day 3: Order Packed and Ready to Ship</div>
        <div class="status-icon">&#x1f4e5;</div>
        <p>Your order has been packed and is ready to be shipped.</p>
        </div>
        <div class="status">
            <div class="timeline-item">Day 4: Order Delivered</div>
        <div class="status-icon">&#x1f680;</div>
        <p>Your order is on its way to you! Expect it soon.</p>
        </div>
        <div class="go-back">
            <a href="index.html">Go Back to Home</a>
        </div>
    </div>
    
    </body>
    </html>
