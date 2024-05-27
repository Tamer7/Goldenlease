 <!-- Additional Div Start   -->
 <div class="h-[80px] bg-white w-full"></div>
 <!-- Additional Div End    -->

 <!-- Hero Section Start   -->
 <section class="2xl:h-[750px] xl:h-[600px] lg:h-[500px] md:h-[400px] h-[250px] flex items-center justify-center xl:px-0 md:px-10 px-5 relative">
     <div class="container mx-auto" style="z-index: 10">
         <div class="w-full">
             <h1 class="text-[20px] font-bold text-white text-center md:block hidden">HOME/PARTNERS</h1>
             <h2 class="text-white font-bold lg:text-[56px] md:text-[40px] text-[20px] md:text-center text-left">
                 BUSINESS PARTNERS
             </h2>
         </div>
     </div>
     <div class="new-overlay-right">
     </div>
     <img class="absolute top-0 left-0 h-full w-full object-cover" src="/rentit/assets/img/updated/Business-banner.jpg" alt="">
 </section>
 <!-- Hero Section End    -->

 <!-- Form & Detail Section Start  -->
 <section class="lg:pt-[100px] pt-[80px] pb-[50px] xl:px-0 md:px-10 px-5 relative flex justify-center">
     <div class="container mx-auto grid md:grid-cols-2 grid-cols-1  lg:gap-[60px] gap-[48px] lg:w-[80%] w-full">
         <!-- Detail  -->
         <div class=" text-[#222222]" id="<?php echo $id ?? 0 ?>">
             <div class="flex flex-col gap-4 font-bold md:text-[24px] text-[20px]">
                 <h4>
                     If You are a Hotel, Travel agency, regular business. etc…
                 </h4>
                 <h4>
                     we can cooperate with you by providing competitive prices
                 </h4>
             </div>
             <div class="flex flex-col gap-4 text-[#2D2D2D] font-semibold mt-[40px] md:text-[16px] text-[14px]">
                 <p>
                     Cooperation could be by one vehicle.
                 </p>
                 <p>
                     Some cooperation could be marketing as well, such as Cars garage, and air freshener Companies.
                 </p>
                 <p>
                     By providing our customers with their products and helping them to grow and increase awareness.
                 </p>
                 <p>
                     If you are a travel agency, hotel, University, or car garage you can directly ask us for a ( Broucher Stand with a special discount & 100 Brochures inside the stand.)
                 </p>
             </div>
         </div>
         <!-- Detail  -->
         <div class=" text-[#222222]">
             <h4 class="text-[24px] font-bold">Fill the form for more details</h4>
             <form name="contact-form" method="post" action="#" class="edit contact-form" id="contact-form">
						<h1 class="text-[24px] font-bold">Send us message</h1>
						<div class="border-b border-[#cccccc] pb-[20px] pt-[20px]">
							<input 
								type="text" 
								class="focus:outline-none placeholder:text-[#666666] w-full"
								placeholder="Your Name" 
								name="name" 
								id="name"
							>
						</div>
						<div class="contact-name-tooltip-div hidden" style="color: red; font-size: 16px;">Name is required</div>
						<div class="border-b border-[#cccccc] pb-[20px] pt-[20px]">
							<input 
								type="text" 
								placeholder="Email" 
								class="focus:outline-none placeholder:text-[#666666] w-full"
								name="email" 
								id="email"
								data-toggle="tooltip"
								data-original-title="Email is required"
							>
						</div>
						<div class="contact-email-tooltip-div hidden" style="color: red; font-size: 16px;">Email is required</div>
						<div class="border-b border-[#cccccc] text-[#666666] pb-[20px] pt-[20px]">
							<select 
								class="focus:outline-none text-[#666666] w-full" 
								style="color:#666666"
								name="subject" 
								id="subject"
								data-toggle="tooltip"
								data-original-title="Area Of Interest is required"
							>
								<option value="" class="text-[#666666]">Area Of Interest</option>
								<option value="Booking">About Booking</option>
								<option value="Inquiry">Inquiry</option>
							</select>
						</div>
						<div class="contact-subject-tooltip-div hidden" style="color: red; font-size: 16px;">Area Of Interest is required</div>
						<div class="w-full border-b border-[#cccccc] pt-[20px]">
							<textarea class="w-full resize-none focus:outline-none placeholder:text-[#666666]" name="message" placeholder="Message" rows="10" name="message" id="input-message" data-toggle="tooltip" data-original-title="Message is required"></textarea>
						</div>
						<div class="message-tooltip-div hidden" style="color: red; font-size: 16px;">Message is required</div>
						<input 
							type="submit" 
							class="bg-[#3A386F] rounded-full px-[26px] py-[10px] text-white font-bold text-[16px] mt-[32px] md:w-[100px] w-full form-button form-button-submit cursor-pointer" 
							value="Send"
							id="submit_btn"
						>
					</form>
         </div>
     </div>
 </section>
 <!-- Form & Detail Section End -->