<?php
/**
 * Frontend user template for aiposts.
 *
 * @package wp-plugin
 */

_get_template( '_header' ); ?>
<div class="ap-board ap-flex ap-h-full">
	<aside>
		<div class="ap-relative ap-px-2 ap-py-10" x-data="{ open: true }">
			<div class="ap-mb-10 ap-ml-3">
				<a><img x-show="!open" src="<?php echo AIPOSTS_ASSET_URL ?>images/logo.png" alt="logo" /></a>
				<a x-show="open" class="ap-ml-0">
					<?php _get_svg( 'logo' ) ?>
				</a>
				<button x-on:click="open = ! open"
					class="ap-absolute ap--right-5 ap-rounded-full ap-p-3 ap-bg-white ap-top-20">
					<!--Open Icon-->
					<svg x-show="!open" class="ap-rotate-180" width="8" height="14" viewBox="0 0 8 14" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1 13L7 7L1 1" stroke="#7367F0" stroke-width="2.5" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>
					<!--Close Icon-->
					<svg x-show="open" width="8" height="14" viewBox="0 0 8 14" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1 13L7 7L1 1" stroke="#7367F0" stroke-width="2.5" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>

				</button>
			</div>
			<nav x-bind:class="!open">
				<ul class="ap-text-base ap-text-gray-400">
					<li>
						<a class="ap-flex ap-items-center ap-px-4 ap-py-3  hover:ap-text-white ap-rounded-md hover:ap-bg-gradient-to-r ap-from-[#7367F0] ap-to-[#9D95F5]"
							href="#">
							<?php _get_svg( 'sr_overview' ) ?>
							<span class="ap-pl-2 ap-leading-none" x-show="!open">Overview</span>
						</a>
					</li>
					<li>
						<a class="ap-flex ap-items-center ap-px-4 ap-py-3  hover:ap-text-white ap-rounded-md hover:ap-bg-gradient-to-r ap-from-[#7367F0] ap-to-[#9D95F5]"
							href="#">
							<?php _get_svg( 'sr_service' ); ?>
							<span class="ap-pl-2 ap-leading-none" x-show="!open">My services</span>
						</a>
					</li>
					<li>
						<a class="ap-flex ap-items-center ap-px-4 ap-py-3  hover:ap-text-white ap-rounded-md hover:ap-bg-gradient-to-r ap-from-[#7367F0] ap-to-[#9D95F5]"
							href="#">
							<?php _get_svg( 'sr_message' ) ?>
							<span class="ap-pl-2 ap-leading-none" x-show="!open">Message</span>
						</a>
					</li>
					<li>
						<a class="ap-flex ap-items-center ap-px-4 ap-py-3  hover:ap-text-white ap-rounded-md hover:ap-bg-gradient-to-r ap-from-[#7367F0] ap-to-[#9D95F5]"
							href="#">
							<?php _get_svg( 'sr_payment' ) ?>
							<span class="ap-pl-2 ap-leading-none" x-show="!open">Payments</span>
						</a>
					</li>
					<li>
						<a class="ap-flex ap-items-center ap-px-4 ap-py-3  hover:ap-text-white ap-rounded-md hover:ap-bg-gradient-to-r ap-from-[#7367F0] ap-to-[#9D95F5]"
							href="#">
							<?php _get_svg( 'sr_blog' ) ?>
							<span class="ap-pl-2 ap-leading-none" x-show="!open">Blog</span>
						</a>
					</li>
					<li>
						<a class="ap-flex ap-items-center ap-px-4 ap-py-3  hover:ap-text-white ap-rounded-md hover:ap-bg-gradient-to-r ap-from-[#7367F0] ap-to-[#9D95F5]"
							href="#">
							<?php _get_svg( 'sr_settings' ) ?>
							<span class="ap-pl-2 ap-leading-none" x-show="!open">Settings</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</aside>
	<section class="ap-bg-[#F1F0FD] ap-flex-1 ap-flex ap-flex-col">
		<header class="ap-p-5">
			<div class="ap-flex ap-justify-between ap-items-center">
				<div class="ap-top-left ap-flex">
					<div class="ap-flex ap-mr-4">
						<input type="search" placeholder="Search Services"
							class="ap-w-96 ap-rounded-md ap-border ap-border-gray ap-px-3 ap-py-2.5 ap-text-sm">
					</div>
					<div class="ap-flex">
						<button
							class="ap-flex ap-px-3 ap-py-2.5 ap-text-white ap-rounded-md ap-bg-gradient-to-r ap-from-[#7367F0] ap-to-[#9D95F5]">
							<?php _get_svg( 'sr_plus' ) ?>
							<span class="ap-text-sm ap-pl-2">Add Client</span>
						</button>

						<a class="ap-flex ap-px-3 ap-py-2.5 ap-text-black"
							href="<?php echo esc_url( add_query_arg( 'page', 'ap-option', admin_url( 'admin.php' ) ) ); ?>"><?php _get_svg( 'sr_cog', true ); ?></a>

					</div>
				</div>
				<div class="ap-top-right">
					<ul class="ap-flex ap-justify-between ap-items-center ap-gap-5">
						<li><a href=""><?php _get_svg( 'sr_help' ) ?></a></li>
						<li><a href="" class="ap-relative">
								<?php _get_svg( 'sr_bell' ) ?>
								<div class="ap-absolute ap-right-0 ap-top-0">
									<span class="ap-relative ap-flex ap-h-3 ap-w-3">
										<span
											class="ap-animate-ping ap-absolute ap-inline-flex ap-h-full ap-w-full ap-rounded-full ap-bg-red-400 ap-opacity-75"></span>
										<span
											class="ap-relative ap-inline-flex ap-rounded-full ap-h-3 ap-w-3 ap-bg-red-500"></span>
									</span>
								</div>
							</a>
						</li>
						<li class="ap-flex ap-justify-between ap-items-center">
							<div class="ap-flex ap-justify-between ap-items-center">
								<img width="40" height="40" src="<?php echo AIPOSTS_ASSET_URL ?>images/ellipse.png"
									alt="photo">
								<div class="ap-leading-4 ap-ml-3">
									<h3 class="ap-text-md ap-text-[#3A393F]">Saraz Deb</h3>
									<span class="ap-text-sm ap-text-[#A5A3AE]">Client</span>
								</div>
							</div>
							<div class=" ap-ml-5"><?php _get_template( 'components/dropdown-a' ); ?></div>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<main class="ap-flex-1 ap-overflow-scroll ap-p-5">

			<h1 class="ap-mb-8">Payments</h1>


			<div class="ap-main-top ap-grid ap-grid-cols-4 ap-gap-4 ap-pb-10">
				<div
					class="ap-bg-white ap-rounded ap-flex ap-items-start ap-px-3 ap-py-5  ap-border-b-8 ap-border-indigo-500">
					<div class="ap-bg-[#E9E7FD] ap-rounded-full ap-p-3 ap-mr-3">
						<?php _get_svg( 'sr_balance' ) ?>
					</div>
					<div>
						<div class="ap-text-dark-5 ap-font-bold ap-text-2xl">$560.78</div>
						<div class="ap-text-dark-7 ap-text-xs">Your Balance</div>
					</div>
				</div>
				<div
					class="ap-bg-white ap-rounded ap-flex ap-items-start ap-px-3 ap-py-5  ap-border-b-8 ap-border-[#EA5455]">
					<div class="ap-bg-[#FDE6E6] ap-rounded-full ap-p-3 ap-mr-3">
						<?php _get_svg( 'due_balance' ) ?>
					</div>
					<div>
						<div class="ap-text-[#3A393F] ap-font-bold ap-text-2xl">$214</div>
						<div class="ap-text-[#6F6B7D] ap-text-xs">Due Balance</div>
					</div>
				</div>
				<div
					class="ap-bg-white ap-rounded ap-flex ap-items-start ap-px-3 ap-py-5  ap-border-b-8 ap-border-[#00CFE8]">
					<div class="ap-bg-[#E6FAFD] ap-rounded-full ap-p-3 ap-mr-3">
						<?php _get_svg( 'sr_expenses' ) ?>
					</div>
					<div>
						<div class="ap-text-[#3A393F] ap-font-bold ap-text-2xl">$1560.78</div>
						<div class="ap-text-[#6F6B7D] ap-text-xs">Expenses</div>
					</div>
				</div>
				<div
					class="ap-bg-white ap-rounded ap-flex ap-items-start ap-px-3 ap-py-5  ap-border-b-8 ap-border-[#FF9F43]">
					<div class="ap-bg-[#FCF0E6] ap-rounded-full ap-p-3 ap-mr-3">
						<?php _get_svg( 'sr_taxes' ) ?>

					</div>
					<div>
						<div class="ap-text-[#3A393F] ap-font-bold ap-text-2xl">$ 145</div>
						<div class="ap-text-[#6F6B7D] ap-text-xs">Taxes</div>
					</div>
				</div>
			</div><!--end ap-main-top-->

			<!-- <table class="ap-table-auto"> -->
			<h3 class="ap-bg-white ap-p-3 ap-rounded-tr-md ap-rounded-tl-md">Transection History</h3>
			<table class="ap-border-collapse ap-table-auto ap-w-full ap-text-sm ap-bg-white ap-rounded-md">
				<thead class="">
					<tr>
						<th class="ap-p-3 ap-bg-[#F2F0FD] ap-text-left">Service name</th>
						<th class="ap-p-3 ap-bg-[#F2F0FD] ap-text-left">Service provider</th>
						<th class="ap-p-3 ap-bg-[#F2F0FD] ap-text-left">Email</th>
						<th class="ap-p-3 ap-bg-[#F2F0FD] ap-text-left">Amount</th>
						<th class="ap-p-3 ap-bg-[#F2F0FD] ap-text-left">Payment method</th>
						<th class="ap-p-3 ap-bg-[#F2F0FD] ap-text-left">Status</th>
					</tr>
				</thead>
				<tbody>
					<tr class="ap-border-b ap-border-gray">
						<td class="ap-p-3">The Sliding</td>
						<td class="ap-p-3">Malcolm Lockyer</td>
						<td class="ap-p-3">abc@gmail.com</td>
						<td class="ap-p-3">1961</td>
						<td class="ap-p-3">09/03/2023</td>
						<td class="ap-p-3">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect x="0.5" y="0.5" width="19" height="19" rx="9.5" fill="#12B76A" />
								<path d="M14.6673 6.5L8.25065 12.9167L5.33398 10" stroke="white" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" />
								<rect x="0.5" y="0.5" width="19" height="19" rx="9.5" stroke="#12B76A" />
							</svg>
						</td>
					</tr>
					<tr class="ap-border-b ap-border-gray">
						<td class="ap-p-3">The Sliding</td>
						<td class="ap-p-3">Malcolm Lockyer</td>
						<td class="ap-p-3">abc@gmail.com</td>
						<td class="ap-p-3">1961</td>
						<td class="ap-p-3">09/03/2023</td>
						<td class="ap-p-3 ap-text-[#FF9F43]">Pending</td>
					</tr>
					<tr class="ap-border-b ap-border-gray">
						<td class="ap-p-3">The Sliding</td>
						<td class="ap-p-3">Malcolm Lockyer</td>
						<td class="ap-p-3">abc@gmail.com</td>
						<td class="ap-p-3">1961</td>
						<td class="ap-p-3">09/03/2023</td>
						<td class="ap-p-3">
							<?php _get_svg( 'check_icon' ); ?>
						</td>
					</tr>
					<tr class="ap-border-b ap-border-gray">
						<td class="ap-p-3">The Sliding</td>
						<td class="ap-p-3">Malcolm Lockyer</td>
						<td class="ap-p-3">abc@gmail.com</td>
						<td class="ap-p-3">1961</td>
						<td class="ap-p-3">09/03/2023</td>
						<td class="ap-p-3">
							<?php _get_svg( 'check_icon' ); ?>
						</td>
					</tr>
					<tr class="ap-border-b ap-border-gray">
						<td class="ap-p-3">The Sliding</td>
						<td class="ap-p-3">Malcolm Lockyer</td>
						<td class="ap-p-3">abc@gmail.com</td>
						<td class="ap-p-3">1961</td>
						<td class="ap-p-3">09/03/2023</td>
						<td class="ap-p-3">
							<?php _get_svg( 'check_icon' ); ?>
						</td>
					</tr>
					<tr>
						<td class="ap-p-3">The Sliding</td>
						<td class="ap-p-3">Malcolm Lockyer</td>
						<td class="ap-p-3">abc@gmail.com</td>
						<td class="ap-p-3">1961</td>
						<td class="ap-p-3">09/03/2023</td>
						<td class="ap-p-3 ap-text-[#FF9F43]">Pending</td>
					</tr>
				</tbody>

			</table>

			<?php //_get_template('components/home-client-overview',[], true);
			?>

		</main>
	</section>
</div>
<?php _get_template( '_footer', [], true ); ?>
