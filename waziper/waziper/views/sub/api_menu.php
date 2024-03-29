<!-- Start chats tab-pane -->
<div class="tab-pane h-100 show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <div class="px-4 pt-4">
        <h4 class="mb-4">
            <?php waziper_e('API Documentation')?>
        </h4>
        <div class="search-box chat-search-box">            
            <div class="input-group mb-3 rounded-3">
                <span class="input-group-text text-muted bg-white pe-1 ps-3">
                    <i class="ri-search-line search-icon wz-fs-18"></i>
                </span>
                <input type="text" class="form-control search-input" placeholder="<?php waziper_e('Search messages or users')?>">
            </div> 
        </div> <!-- Search Box-->
    </div> <!-- .p-4 -->

    <!-- Start chat-message-list -->
    <div class="chat-message-list wa-scroll px-2">
        <h5 class="mb-3 px-3 wz-fs-14 wz-m-t-20 text-dark text-uppercase wz-fw-6"><i class="ri-book-read-line position-relative wz-t-2"></i> <?php waziper_e('Instance Api')?></h5>
	    <ul class="wa-api-list px-3">
	    	<li class="wz-m-b-8"><a href="#create-instance" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("Create Instance")?></a></li>
	    	<li class="wz-m-b-8"><a href="#get-qr-code" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("GET QR Code")?></a></li>
	    	<li class="wz-m-b-8"><a href="#set-receving-webhook" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("Set Receving Webhook")?></a></li>
	    	<li class="wz-m-b-8"><a href="#reboot-instance" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("Reboot Instance")?></a></li>
	    	<li class="wz-m-b-8"><a href="#reset-instance" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("Reset Instance")?></a></li>
	    	<li class="wz-m-b-8"><a href="#reconnect" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("Reconnect")?></a></li>
	    </ul> 

	    <h5 class="mb-3 px-3 wz-fs-14 wz-m-t-30 text-dark text-uppercase wz-fw-6"><i class="ri-book-read-line position-relative wz-t-2"></i> <?php waziper_e('Send Direct Message Api')?></h5>
	    <ul class="wa-api-list px-3">
	    	<li class="wz-m-b-8"><a href="#send-text" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("Send Text")?></a></li>
	    	<li class="wz-m-b-8"><a href="#send-media" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("Send File")?></a></li>
	    	
	    </ul> 

	    <h5 class="mb-3 px-3 wz-fs-14 wz-m-t-30 text-dark text-uppercase wz-fw-6"><i class="ri-book-read-line position-relative wz-t-2"></i> <?php waziper_e('Group Api')?></h5>
	    <ul class="wa-api-list px-3">
	    	<li class="wz-m-b-8"><a href="#send-text-message-group" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("Send Text Message Group")?></a></li>
	    	<li class="wz-m-b-8"><a href="#send-media-message-group" class="text-muted"><span class="text-success wz-fs-12 wz-fw-6 wz-m-r-10">POST</span> <?php waziper_e("Send File Message Group")?></a></li>
	    </ul>  
    </div>
    <!-- End chat-message-list -->
</div>
<!-- End chats tab-pane -->