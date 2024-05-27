<style>
	input::placeholder {
		color: #000000;
	}

	textarea::placeholder {
		color: #000000;
	}
</style>
<section id="1" class="edit page-section color  pb-module-section">


	<!-- Additional Div Start  -->
	<div class="h-[80px] bg-white w-full"></div>
	<!-- Additional Div End  -->
	<!-- Hero Section Start  -->
	<section class="2xl:h-[750px] xl:h-[600px] lg:h-[500px] md:h-[400px] h-[250px] flex items-center justify-center   xl:px-0 md:px-10 px-5 relative">
		<div class="container mx-auto" style="z-index: 10">
			<div class="w-full">
				<h1 class="text-[20px] font-bold text-white text-center md:block hidden">HOME/CONTACT</h1>
				<h2 class="text-white font-bold lg:text-[56px] md:text-[40px] text-[20px] md:text-center text-left">
					REACH OUT TO US
				</h2>
			</div>
		</div>
		<div class="new-overlay-right">
		</div>
		<img class="absolute top-0 left-0 h-full w-full object-cover" src="rentit/assets/img/updated/contact.jpg" alt="">
	</section>
	<!-- Hero Section End  -->
	<section class="lg:pt-[100px] pt-[53px] lg:pb-0 pb-[53px] xl:px-0 md:px-10 px-5 flex justify-center">
		<div class="container mx-auto lg:w-[80%] w-full">
			<div class="grid grid-cols-12 sm:gap-8  lg:gap-16">
				<div class=" col-span-12 sm:col-span-7 placeholder:text-[#666666] font-sans">
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
				<div class=" col-span-12 sm:col-span-5 mt-[50px] sm:mt-0">
					<h1 class="text-[24px] font-bold mb-[30px]">Connect with us</h1>
					<div class="flex gap-4 items-center mb-[10px]">
						<i class='bx bxs-phone-call text-[20px]'></i>
						<p class="text-[18px]">+971 586 887 706</p>
					</div>
					<div class="flex gap-4 items-center">
						<i class='bx bxs-envelope text-[20px]'></i>
						<p class="text-[18px]">Hello@rentit.com</p>
					</div>
					<h1 class="text-[24px] font-bold my-[30px]">Deira, Dubai</h1>
					<div class="flex gap-4 items-start">
						<i class='bx bxs-edit-location text-[20px] mt-2'></i>
						<p class="text-[18px]">#801, 8TH FLOOR, AL SERKAL BUILDING 2, 17 19B STREET<br> PORT SAEED,DUBAI</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>