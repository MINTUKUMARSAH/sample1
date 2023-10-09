<?php /* Template Name: Tracking Order Template */?>

<?php get_header(); ?>

<style>
    .order-tracking-container {
        max-width: 640px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        height: 240px
    }

    .order-tracking-container h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .order-tracking-container p {
        font-size: 14px;
        margin-bottom: 20px;
    }

    .input-group {
        display: flex;
    }

    .input-group input {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .input-group button {
        padding: 10px 20px;
        background-color: #EC892C;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .input-group button:hover {
        background-color: #0056b3;
    }

    .hidden {
        display: none;
    }

    .wcdiv p {
        font-size: 12px;
    }

    @media (max-width: 768px) {

        .wcdiv,
        .wcimg,
        .wctext001,
        .wctext002 {
            position: static;
        }
    }

  .table-container {
        max-width: 80%;
        margin: 10%;
        gap:5%;
        display: flex;
    }

    .align-right{
        text-align: right;
          font-weight: bold;

    }
    table {
        width: 33%;
        border-collapse: collapse;
        margin-bottom: 20px;

    }

    th,
    td {
        padding: 10px;
        border-bottom: 1px solid #ccc;
      color:#000;
    }

    th {
        background-color: #f1f1f1;
        font-weight: bold;
        text-align: left;
    }

    td {
        text-align: left;
    }

    /* Style for colspan rows */
    th[colspan="2"],
    td[colspan="2"] {
        text-align: center;
        background-color: #e0e0e0;
        font-size: 1.2em;
          font-weight: bold;
    }

    @media (max-width: 767px) {
        table {
        width: 100%;
       
    }
      .wcpage{
      display:none;
      }
    .table-container {
        max-width: 100%;
        margin: 2% 2%;
        gap:5%;
        display: block;
    }  
    }
  
</style>
		<link rel="stylesheet" type="text/css" href="1696401099_track-1/styles.css" media="all" />


<div class="order-tracking-container" style="
    margin-top: 20px;     margin-bottom: 100px;">
    <h2>Track Your Order</h2>
    <p>Enter your tracking ID to check the status of your order.</p>
    <div class="input-group">
        <input type="text" id="trackingIdInput" placeholder="Enter Tracking ID">
        <button id="trackButton" onclick="trackOrder()">Track</button>
    </div>
    <div id="trackingResults" class="hiddens">
        <span id="trackingInfo"></span>
    </div>
</div>

<div class="tracking-order d-none">
<div class="wcdiv wcpage" style="width:792pt; height:387pt; margin-top: -80px;">
			
			
			<div class="wcdiv" style="left:80.8pt; top:300.45pt;">
				<div class="wcdiv" style="left:0pt; top:-0.25pt; width:618.2pt; height:0pt; border-top:solid 0.75pt #000000;">
				</div>
			</div>
			<div class="wcdiv" style="left:438.1pt; top:269.6pt;">
				<div class="wcdiv" style="left:-0.25pt; top:-0.25pt; width:77px; height:77px;">
					<object type="image/svg+xml" data="1696401099_track-1/1696401099_track-1-3.svg" id="arrived"></object>

				</div>
			</div>
			<div class="wcdiv" style="left:25.28pt; top:267.75pt;">
				<div class="wcdiv" style="left:-0.25pt; top:-0.25pt; width:77px; height:77px;">
					<object type="image/svg+xml" data="1696401099_track-1/1696401099_track-1-4.svg" id="createorder"></object>
                    

				</div>
			</div>
			<div class="wcdiv" style="left:167.1pt; top:270.6pt;">
				<div class="wcdiv" style="left:-0.25pt; top:-0.25pt; width:77px; height:77px;">
					<object type="image/svg+xml" data="1696401099_track-1/1696401099_track-1-5.svg" id="ready"></object>

				</div>
			</div>
			<div class="wcdiv" style="left:295.4pt; top:269.85pt;">
				<div class="wcdiv" style="left:-0.5pt; top:-0.5pt; width:78px; height:78px;">
					<object type="image/svg+xml" data="1696401099_track-1/1696401099_track-1-7.svg" id="dispatch"></object>

				</div>
			</div>
			<div class="wcdiv" style="left:547.4pt; top:271.2pt;">
				<div class="wcdiv" style="left:-0.25pt; top:-0.25pt; width:77px; height:77px;">
					<object type="image/svg+xml" data="1696401099_track-1/1696401099_track-1-7.svg" id="sent"></object>

				</div>
			</div>
			<div class="wcdiv" style="left:695.5pt; top:272.5pt;">
				<div class="wcdiv" style="left:-0.5pt; top:-0.5pt; width:78px; height:78px;">
					<object type="image/svg+xml" data="1696401099_track-1/1696401099_track-1-7.svg" id="delivered"></object>

				</div>
			</div>
			<div class="wcdiv"  id = "createorderimg">
				<img class="wcimg" style="left:33.3pt; top:277pt; width:43.4pt; height:43.4pt;" src="1696401099_track-1/1696401099_track-1-8.png" />
			</div>
			<div class="wcdiv" id = "readyimg">
				<img class="wcimg" style="left:178.55pt; top:282.1pt; width:36pt; height:36pt;" src="1696401099_track-1/1696401099_track-1-9.png" />
			</div>
			<div class="wcdiv" id = "dispatchimg" >
				<img class="wcimg" style="left:302.9pt; top:276.65pt; width:43.2pt; height:43.2pt;" src="1696401099_track-1/1696401099_track-1-10.png" />
			</div>
			<div class="wcdiv" id = "arrivedimg" >
				<img class="wcimg" style="left:444.85pt; top:274.9pt; width:43.2pt; height:43.2pt;" src="1696401099_track-1/1696401099_track-1-11.png" />
			</div>
			<div class="wcdiv" id = "sentimg">
				<img class="wcimg" style="left:553.35pt; top:286.85pt; width:46.9pt; height:29.85pt;" src="1696401099_track-1/1696401099_track-1-12.png" />
			</div>
			<div class="wcdiv" id = "deliveredimg" >
				<img class="wcimg" style="left:703.65pt; top:281.4pt; width:43.2pt; height:43.2pt;" src="1696401099_track-1/1696401099_track-1-13.png" />
			</div>
			
			
			
			
			
			<div class="wcdiv" style="left:13.25pt; top:331.33pt;">
				<div class="wcdiv" style="clip:rect(0pt,130.75pt,30.08pt,0pt);">
					<div class="wcdiv" style="left:5.4pt; position:static">
						<span  id="createordertext" class="wcspan wctext001" style="font-size:16pt; left:0pt; top:0pt; line-height:19.53pt; display:none;">Order Created</span>
					</div>
				</div>
				<div class="wcdiv" style="left:130.75pt; clip:rect(0pt,150.2pt,30.08pt,0pt);">
					<div class="wcdiv" style="left:5.4pt;">
						<span class="wcspan wctext001" style="font-size:16pt; left:0pt; top:0pt; line-height:19.53pt; display:none;" id="readytext">Ready For Shipment</span>
					</div>
				</div>
				<div class="wcdiv" style="left:280.95pt; clip:rect(0pt,143.55pt,30.08pt,0pt);">
					<div class="wcdiv" style="left:5.4pt;">
						<span class="wcspan wctext001" style="font-size:16pt; left:0pt; top:0pt; line-height:19.53pt; display:none;" id="dispatchtext">Dispatched</span>
					</div>
				</div>
				<div class="wcdiv" style="left:424.5pt; clip:rect(0pt,103.15pt,30.08pt,0pt);">
					<div class="wcdiv" style="left:5.4pt;">
						<span class="wcspan wctext001" style="font-size:16pt; left:0pt; top:0pt; line-height:19.53pt; display:none;" id="arrivedtext">Arrived</span>
					</div>
				</div>
				<div class="wcdiv" style="left:527.65pt; clip:rect(0pt,146.5pt,30.08pt,0pt);">
					<div class="wcdiv" style="left:5.4pt;">
						<span class="wcspan wctext001" style="font-size:16pt; left:0pt; top:0pt; line-height:19.53pt; display:none;" id="senttext">Sent for Delivery</span>
					</div>
				</div>
				<div class="wcdiv" style="left:674.15pt; clip:rect(0pt,73.1pt,30.08pt,0pt);">
					<div class="wcdiv" style="left:5.4pt;">
						<span class="wcspan wctext001" style="font-size:16pt; left:0pt; top:0pt; line-height:19.53pt; display:none;" id="deliveredtext">Delivered</span>
					</div>
				</div>
			</div>
			
			<div class="wcdiv" style="left:283.24pt; top:102.49pt;">
				<div class="wcdiv" style="clip:rect(3.6pt,270pt,48.4pt,0pt);">
					<div class="wcdiv" style="left:7.2pt; top:3.6pt;">
						<span class="wcspan wctext001" style="font-size:28pt; left:30.98pt; top:0.95pt; line-height:34.18pt;">Track Your Order</span>
					</div>
				</div>
			</div>
			<div class="wcdiv" style="left:286.3pt; top:177.45pt;">
				<div class="wcdiv" >
					<div class="wcdiv" style="left:7.55pt; top:3.95pt;">
						<span class="wcspan wctext002" style="font-size:14pt; left:0pt; top:0pt; line-height:17.09pt;" id="order_satus_text"></span>		
						<span class="wcspan wctext001" style="font-size:14pt; left:92.88pt; top:0pt; line-height:17.09pt; display: none;" id="create_status">Your Order has been created.</span>
						<span class="wcspan wctext001" style="font-size:14pt; left:92.88pt; top:0pt; line-height:17.09pt; display: none;" id="ready_status">Your Order is being ready for Shipping.</span>
						<span class="wcspan wctext001" style="font-size:14pt; left:92.88pt; top:0pt; line-height:17.09pt; display: none;" id="dispatch_status">Your Order has been dipatched.</span>
						<span class="wcspan wctext001" style="font-size:14pt; left:92.88pt; top:0pt; line-height:17.09pt; display: none;" id="arrived_status">Your Order has arrived to your nearest location.</span>
						<span class="wcspan wctext001" style="font-size:14pt; left:92.88pt; top:0pt; line-height:17.09pt; display: none;" id="sent_status">Your Order has been sent for delivery.</span>
						<span class="wcspan wctext001" style="font-size:14pt; left:92.88pt; top:0pt; line-height:17.09pt; display: none;" id="delivered_status">Your Order has been delivered.</span>

					</div>
				</div>
			</div>
		</div>
 <div class="table-container">
        <table>
            <tr>
                <th colspan="2">Order Information</th>
            </tr>
            <tr>
                <td>Order ID:</td>
              <td class="align-right"><span id="orderId"></span></td>
            </tr>
            <tr>
                <td>COD Charges:</td>
                <td class="align-right"><span id="codCharges"></span></td>
            </tr>
            <tr>
                <td>Tracking ID:</td>
                <td class="align-right"><span id="trackingId"></span></td>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan="2">Sender Information</th>
            </tr>
            <tr>
                <td>Name:</td>
                <td class="align-right"><span id="sendername"></span></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td class="align-right"><span id="senderphone"></span></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td class="align-right"><span id="senderaddress"></span></td>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan="2">Receiver Information</th>
            </tr>
            <tr>
                <td>Name:</td>
                <td class="align-right"><span id="receivername"></span></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td class="align-right"><span id="receiverphoneNo"></span></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td class="align-right"><span id="receiveraddress"></span></td>
            </tr>
        </table>
    </div>
  </div>
<script>
    const elementToHide = document.getElementById("banner-hero-mage");
    elementToHide.style.display = "none";
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  function ordercreatedfun() {
    document.getElementById('createorder').data = "1696401099_track-1/green.svg";
  
 document.getElementById("createorderimg").style.position = "static";
  document.getElementById('createordertext').style.display = "block";
  
}
    function readyfun() {
    document.getElementById('ready').data = "1696401099_track-1/green.svg";
  
 document.getElementById("readyimg").style.position = "static";
  document.getElementById('readytext').style.display = "block";
  
}
    function dispatchfun() {
    document.getElementById('dispatch').data = "1696401099_track-1/green.svg";
  
 document.getElementById("dispatchimg").style.position = "static";
  document.getElementById('dispatchtext').style.display = "block";
  
}
    function arrivedfun() {
    document.getElementById('arrived').data = "1696401099_track-1/green.svg";
  
 document.getElementById('arrivedimg').style.position = "static";
  document.getElementById('arrivedtext').style.display = "block";
  
}
    function sentfun() {
    document.getElementById('sent').data = "1696401099_track-1/green.svg";
  
 document.getElementById("sentimg").style.position = "static";
  document.getElementById('senttext').style.display = "block";
  
}
    function deliveredfun() {
    document.getElementById('delivered').data = "1696401099_track-1/green.svg";  
  document.getElementById("deliveredimg").style.position = "static";
  document.getElementById('deliveredtext').style.display = "block";
  
}
    function restoredefault() {
    document.getElementById('delivered').data = "1696401099_track-1/1696401099_track-1-3.svg";  
  	document.getElementById("deliveredimg").style.position = "absolute";
  	document.getElementById('deliveredtext').style.display = "none";
    document.getElementById('sent').data = "1696401099_track-1/1696401099_track-1-3.svg";
	document.getElementById("sentimg").style.position = "absolute";
  	document.getElementById('senttext').style.display = "none";
    document.getElementById('arrived').data = "1696401099_track-1/1696401099_track-1-3.svg";  
    document.getElementById('arrivedimg').style.position = "absolute";
    document.getElementById('arrivedtext').style.display = "none";
    document.getElementById('dispatch').data = "1696401099_track-1/1696401099_track-1-3.svg";  
 	document.getElementById("dispatchimg").style.position = "absolute";
   	document.getElementById('dispatchtext').style.display = "none";
    document.getElementById('ready').data = "1696401099_track-1/1696401099_track-1-3.svg";  
 	document.getElementById("readyimg").style.position = "absolute";
  	document.getElementById('readytext').style.display = "none";
    document.getElementById('createorder').data = "1696401099_track-1/1696401099_track-1-3.svg";  
 	document.getElementById("createorderimg").style.position = "absolute";
  	document.getElementById('createordertext').style.display = "none";
    document.getElementById('create_status').style.display = "none";  
  	document.getElementById('ready_status').style.display = "none";
    document.getElementById('dispatch_status').style.display = "none";
    document.getElementById('arrived_status').style.display = "none";
    document.getElementById('sent_status').style.display = "none";
    document.getElementById('delivered_status').style.display = "none";
}
    function trackOrder() {
      restoredefault();
        const trackingId = document.getElementById('trackingIdInput').value;
        const apiUrl = `https://uat.olimaa.com/getOrderStatus/${trackingId}`;
        console.log(apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.status) {
                    console.log("success");
                    const trackingResults = document.getElementById('trackingResults');
                    const trackingInfo = document.getElementById('trackingInfo');
                    trackingInfo.innerHTML = ''; // Clear previous results

                    const orderStatus = data.result.orderStatus;
                    orderStatus.forEach(status => {
                        const listItem = document.createElement('li');
                        listItem.innerText = `${status.status} - ${status.dateTime}`;
                       //trackingInfo.appendChild(listItem);
                        $('.tracking-order').removeClass('d-none');
                    });

                    // Display the tracking results
                    trackingResults.classList.remove('hidden');
                    const orderStatusLength = orderStatus.length;
                  	var lastStatus_text = orderStatus[orderStatusLength - 1].status;
					var lastStatus = lastStatus_text+":";	
                  
                    let condition0Met = false;
                    let condition1Met = false;
                    let condition2Met = false;
                    let condition3Met = false;
                    let condition4Met = false;
                    let condition5Met = false;
                    let condition6Met = false;


                    switch (orderStatusLength) {
                        case 1:

                            condition1Met = true;

                            break;

                        case 2:

                            condition2Met = true;

                            break;

                        case 3:

                            condition3Met = true;

                            break;

                        case 4:

                            condition4Met = true;

                            break;

                        case 5:

                            condition5Met = true;

                            break;
                        case 6:

                            condition6Met = true;

                            break;
                        default:
                            condition0Met = true;
                            break;
                    }


                    // Check if two or more conditions are met
                    if (condition1Met) {
                        ordercreatedfun();
                        document.getElementById('create_status').style.display = "block";

                    }
                    else if (condition2Met) {
                    ordercreatedfun();
                      readyfun();
                        document.getElementById('ready_status').style.display = "block";

                    }
                    else if (condition3Met) {
                        ordercreatedfun();
                      readyfun();
                      dispatchfun();
                        document.getElementById('dispatch_status').style.display = "block";

                    }
                    else if (condition4Met) {
                          ordercreatedfun();
                      readyfun();
                      dispatchfun();
                      arrivedfun();
                      
                        document.getElementById('arrived_status').style.display = "block";

                    }
                    else if (condition5Met) {
  					  ordercreatedfun();
                      readyfun();
                      dispatchfun();
                      arrivedfun();
                      sentfun();
                        document.getElementById('sent_status').style.display = "block";

                    }
                    else if (condition6Met) {
						ordercreatedfun();
                      readyfun();
                      dispatchfun();
                      arrivedfun();
                      sentfun();
                     deliveredfun();
                   document.getElementById('delivered_status').style.display = "block";

                    }
                    else {

                    }
                    // Update additional information using plain JavaScript
                    document.getElementById('orderId').innerHTML = data.result.orderId || 'null';
                    document.getElementById('trackingId').innerHTML = trackingId || 'null';
                    document.getElementById('codCharges').innerHTML = data.result.codCharges || 'null';
                    document.getElementById('receivername').innerHTML = data.result.orderReciver.name || 'null';
                    document.getElementById('receiverphoneNo').innerHTML = data.result.orderReciver.phoneNo || 'null';
                    document.getElementById('receiveraddress').innerHTML = data.result.orderReciver.address || 'null';
                    document.getElementById('sendername').innerHTML = data.result.orderSender.name || 'null';
                    document.getElementById('senderphone').innerHTML = data.result.orderSender.phoneNo || 'null';
                    document.getElementById('senderaddress').innerHTML = data.result.orderSender.address || 'null';
                    document.getElementById('order_satus_text').innerHTML = lastStatus;

                } else {
                    alert('Failed to fetch tracking information. Please try again.');
                }
            })
            .catch(error => console.error('Error fetching tracking data:', error));
    }

</script>

<?php get_footer(); ?>