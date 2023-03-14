<?php _get_template('_header'); ?>
<div class="sr-board sr-flex sr-h-full">
    <aside>
        <div class="sr-relative sr-px-2 sr-py-10" x-data="{ open: true }">
            <div class="sr-mb-10 sr-ml-3">
                <a><img x-show="!open" src="<?php echo SERVICER_ASSET_URL ?>images/logo.png" alt="logo" /></a>
                <a x-show="open" class="sr-ml-0">
                    <?php _get_svg('logo') ?>
                </a>
                <button x-on:click="open = ! open" class="sr-absolute sr--right-5 sr-rounded-full sr-p-3 sr-bg-white sr-top-20">
                    <!--Open Icon-->
                    <svg x-show="!open" class="sr-rotate-180" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#7367F0" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <!--Close Icon-->
                    <svg x-show="open" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#7367F0" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
            </div>
            <nav x-bind:class="!open">
                <ul class="sr-text-base sr-text-gray-400">
                    <li>
                        <a class="sr-flex sr-items-center sr-px-4 sr-py-3  hover:sr-text-white sr-rounded-md hover:sr-bg-gradient-to-r sr-from-[#7367F0] sr-to-[#9D95F5]" href="#">
                            <?php _get_svg('sr_overview') ?>
                            <span class="sr-pl-2 sr-leading-none" x-show="!open">Overview</span>
                        </a>
                    </li>
                    <li>
                        <a class="sr-flex sr-items-center sr-px-4 sr-py-3  hover:sr-text-white sr-rounded-md hover:sr-bg-gradient-to-r sr-from-[#7367F0] sr-to-[#9D95F5]" href="#">
                            <?php _get_svg('sr_service'); ?>
                            <span class="sr-pl-2 sr-leading-none" x-show="!open">My services</span>
                        </a>
                    </li>
                    <li>
                        <a class="sr-flex sr-items-center sr-px-4 sr-py-3  hover:sr-text-white sr-rounded-md hover:sr-bg-gradient-to-r sr-from-[#7367F0] sr-to-[#9D95F5]" href="#">
                            <?php _get_svg('sr_message') ?>
                            <span class="sr-pl-2 sr-leading-none" x-show="!open">Message</span>
                        </a>
                    </li>
                    <li>
                        <a class="sr-flex sr-items-center sr-px-4 sr-py-3  hover:sr-text-white sr-rounded-md hover:sr-bg-gradient-to-r sr-from-[#7367F0] sr-to-[#9D95F5]" href="#">
                            <?php _get_svg('sr_payment') ?>
                            <span class="sr-pl-2 sr-leading-none" x-show="!open">Payments</span>
                        </a>
                    </li>
                    <li>
                        <a class="sr-flex sr-items-center sr-px-4 sr-py-3  hover:sr-text-white sr-rounded-md hover:sr-bg-gradient-to-r sr-from-[#7367F0] sr-to-[#9D95F5]" href="#">
                            <?php _get_svg('sr_blog') ?>
                            <span class="sr-pl-2 sr-leading-none" x-show="!open">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a class="sr-flex sr-items-center sr-px-4 sr-py-3  hover:sr-text-white sr-rounded-md hover:sr-bg-gradient-to-r sr-from-[#7367F0] sr-to-[#9D95F5]" href="#">
                            <?php _get_svg('sr_settings') ?>
                            <span class="sr-pl-2 sr-leading-none" x-show="!open">Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <section class="sr-bg-[#F1F0FD] sr-flex-1 sr-flex sr-flex-col">
        <header class="sr-p-5">
            <div class="sr-flex sr-justify-between sr-items-center">
                <div class="sr-top-left sr-flex">
                    <div class="sr-flex sr-mr-4">
                        <input type="search" placeholder="Search Services" class="sr-w-96 sr-rounded-md sr-border sr-border-gray sr-px-3 sr-py-2.5 sr-text-sm">
                    </div>
                    <div class="sr-flex">
                        <button class="sr-flex sr-px-3 sr-py-2.5 sr-text-white sr-rounded-md sr-bg-gradient-to-r sr-from-[#7367F0] sr-to-[#9D95F5]">
                            <?php _get_svg('sr_plus') ?>
                            <span class="sr-text-sm sr-pl-2">Add Client</span>
                        </button>

                        <a class="sr-flex sr-px-3 sr-py-2.5 sr-text-black" href="<?php echo esc_url(add_query_arg('page', 'sr-option', admin_url('admin.php'))); ?>"><?php _get_svg('sr_cog', true); ?></a>

                    </div>
                </div>
                <div class="sr-top-right">
                    <ul class="sr-flex sr-justify-between sr-items-center sr-gap-5">
                        <li><a href=""><?php _get_svg('sr_help') ?></a></li>
                        <li><a href="" class="sr-relative">
                                <?php _get_svg('sr_bell') ?>
                                <div class="sr-absolute sr-right-0 sr-top-0">
                                    <span class="sr-relative sr-flex sr-h-3 sr-w-3">
                                        <span class="sr-animate-ping sr-absolute sr-inline-flex sr-h-full sr-w-full sr-rounded-full sr-bg-red-400 sr-opacity-75"></span>
                                        <span class="sr-relative sr-inline-flex sr-rounded-full sr-h-3 sr-w-3 sr-bg-red-500"></span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="sr-flex sr-justify-between sr-items-center">
                            <div class="sr-flex sr-justify-between sr-items-center">
                                <img width="40" height="40" src="<?php echo SERVICER_ASSET_URL ?>images/ellipse.png" alt="photo">
                                <div class="sr-leading-4 sr-ml-3">
                                    <h3 class="sr-text-md sr-text-[#3A393F]">Saraz Deb</h3>
                                    <span class="sr-text-sm sr-text-[#A5A3AE]">Client</span>
                                </div>
                            </div>
                            <div class=" sr-ml-5"><?php _get_template('components/dropdown-a'); ?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <main class="sr-flex-1 sr-overflow-scroll sr-p-5">

            <h1 class="sr-mb-8">Payments</h1>


            <div class="sr-main-top sr-grid sr-grid-cols-4 sr-gap-4 sr-pb-10">
                <div class="sr-bg-white sr-rounded sr-flex sr-items-start sr-px-3 sr-py-5  sr-border-b-8 sr-border-indigo-500">
                    <div class="sr-bg-[#E9E7FD] sr-rounded-full sr-p-3 sr-mr-3">
                        <?php _get_svg('sr_balance') ?>
                    </div>
                    <div>
                        <div class="sr-text-dark-5 sr-font-bold sr-text-2xl">$560.78</div>
                        <div class="sr-text-dark-7 sr-text-xs">Your Balance</div>
                    </div>
                </div>
                <div class="sr-bg-white sr-rounded sr-flex sr-items-start sr-px-3 sr-py-5  sr-border-b-8 sr-border-[#EA5455]">
                    <div class="sr-bg-[#FDE6E6] sr-rounded-full sr-p-3 sr-mr-3">
                        <?php _get_svg('due_balance') ?>
                    </div>
                    <div>
                        <div class="sr-text-[#3A393F] sr-font-bold sr-text-2xl">$214</div>
                        <div class="sr-text-[#6F6B7D] sr-text-xs">Due Balance</div>
                    </div>
                </div>
                <div class="sr-bg-white sr-rounded sr-flex sr-items-start sr-px-3 sr-py-5  sr-border-b-8 sr-border-[#00CFE8]">
                    <div class="sr-bg-[#E6FAFD] sr-rounded-full sr-p-3 sr-mr-3">
                        <?php _get_svg('sr_expenses') ?>
                    </div>
                    <div>
                        <div class="sr-text-[#3A393F] sr-font-bold sr-text-2xl">$1560.78</div>
                        <div class="sr-text-[#6F6B7D] sr-text-xs">Expenses</div>
                    </div>
                </div>
                <div class="sr-bg-white sr-rounded sr-flex sr-items-start sr-px-3 sr-py-5  sr-border-b-8 sr-border-[#FF9F43]">
                    <div class="sr-bg-[#FCF0E6] sr-rounded-full sr-p-3 sr-mr-3">
                        <?php _get_svg('sr_taxes') ?>

                    </div>
                    <div>
                        <div class="sr-text-[#3A393F] sr-font-bold sr-text-2xl">$ 145</div>
                        <div class="sr-text-[#6F6B7D] sr-text-xs">Taxes</div>
                    </div>
                </div>
            </div><!--end sr-main-top-->

            <!-- <table class="sr-table-auto"> -->
            <h3 class="sr-bg-white sr-p-3 sr-rounded-tr-md sr-rounded-tl-md">Transection History</h3>
            <table class="sr-border-collapse sr-table-auto sr-w-full sr-text-sm sr-bg-white sr-rounded-md">
                <thead class="">
                    <tr>
                        <th class="sr-p-3 sr-bg-[#F2F0FD] sr-text-left">Service name</th>
                        <th class="sr-p-3 sr-bg-[#F2F0FD] sr-text-left">Service provider</th>
                        <th class="sr-p-3 sr-bg-[#F2F0FD] sr-text-left">Email</th>
                        <th class="sr-p-3 sr-bg-[#F2F0FD] sr-text-left">Amount</th>
                        <th class="sr-p-3 sr-bg-[#F2F0FD] sr-text-left">Payment method</th>
                        <th class="sr-p-3 sr-bg-[#F2F0FD] sr-text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="sr-border-b sr-border-gray">
                        <td class="sr-p-3">The Sliding</td>
                        <td class="sr-p-3">Malcolm Lockyer</td>
                        <td class="sr-p-3">abc@gmail.com</td>
                        <td class="sr-p-3">1961</td>
                        <td class="sr-p-3">09/03/2023</td>
                        <td class="sr-p-3">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="19" height="19" rx="9.5" fill="#12B76A" />
                                <path d="M14.6673 6.5L8.25065 12.9167L5.33398 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <rect x="0.5" y="0.5" width="19" height="19" rx="9.5" stroke="#12B76A" />
                            </svg>
                        </td>
                    </tr>
                    <tr class="sr-border-b sr-border-gray">
                        <td class="sr-p-3">The Sliding</td>
                        <td class="sr-p-3">Malcolm Lockyer</td>
                        <td class="sr-p-3">abc@gmail.com</td>
                        <td class="sr-p-3">1961</td>
                        <td class="sr-p-3">09/03/2023</td>
                        <td class="sr-p-3 sr-text-[#FF9F43]">Pending</td>
                    </tr>
                    <tr class="sr-border-b sr-border-gray">
                        <td class="sr-p-3">The Sliding</td>
                        <td class="sr-p-3">Malcolm Lockyer</td>
                        <td class="sr-p-3">abc@gmail.com</td>
                        <td class="sr-p-3">1961</td>
                        <td class="sr-p-3">09/03/2023</td>
                        <td class="sr-p-3">
                            <?php _get_svg('check_icon'); ?>
                        </td>
                    </tr>
                    <tr class="sr-border-b sr-border-gray">
                        <td class="sr-p-3">The Sliding</td>
                        <td class="sr-p-3">Malcolm Lockyer</td>
                        <td class="sr-p-3">abc@gmail.com</td>
                        <td class="sr-p-3">1961</td>
                        <td class="sr-p-3">09/03/2023</td>
                        <td class="sr-p-3">
                            <?php _get_svg('check_icon'); ?>
                        </td>
                    </tr>
                    <tr class="sr-border-b sr-border-gray">
                        <td class="sr-p-3">The Sliding</td>
                        <td class="sr-p-3">Malcolm Lockyer</td>
                        <td class="sr-p-3">abc@gmail.com</td>
                        <td class="sr-p-3">1961</td>
                        <td class="sr-p-3">09/03/2023</td>
                        <td class="sr-p-3">
                            <?php _get_svg('check_icon'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="sr-p-3">The Sliding</td>
                        <td class="sr-p-3">Malcolm Lockyer</td>
                        <td class="sr-p-3">abc@gmail.com</td>
                        <td class="sr-p-3">1961</td>
                        <td class="sr-p-3">09/03/2023</td>
                        <td class="sr-p-3 sr-text-[#FF9F43]">Pending</td>
                    </tr>
                </tbody>

            </table>

            <?php //_get_template('components/home-client-overview', true);
            ?>

        </main>
    </section>
</div>
<?php _get_template('_footer', true); ?>