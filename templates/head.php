<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jemsamediatech digital | Marketing Agency</title>
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main.css" />
<script src="js/uikit.js"></script>
<script src="js/uikit-core.js"></script>
<style>

    #video-popup video {
        max-width: 90vw;
        max-height: 80vh;
        display: block;
    }

    #video-popup .uk-modal-dialog {
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }

    .click-overlay {
        position: absolute;
        bottom: 8%; /* Adjust this based on where your "Click Here" appears */
        left: 50%;
        transform: translateX(-50%);
        width: 284px; /* Adjust width */
        height: 64px; /* Adjust height */
        cursor: pointer;
        z-index: 10;
    }

    /* For debugging position — remove after */
    /* .click-overlay:hover {
        outline: 2px dashed rgba(255, 255, 255, 0.5);
    } */

    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25D366;
        color: white;
        border-radius: 50px;
        padding: 12px 20px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: bold;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s ease-in-out;
    }

    .whatsapp-button:hover {
        transform: scale(1.1);
    }
</style>