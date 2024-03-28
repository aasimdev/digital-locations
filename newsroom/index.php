<?php
$GLOBALS['title'] = "Newsroom - Digital Locations";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php'); ?>

<section class="mbanner nographic newMbanner" style="background-image: url(./assets/img/market-bg.png);">
    <div class="container">
        <h1>Newsroom</h1>
    </div>
</section>

<section class="news">
    <div class="container">

        <?php
        $data = [
            [
                'title' => "Digital Locations CEO Rich Berliner Discussed Future of 6G Wireless Technology with Top Industry Experts",
                'date' => 'February 14, 2024',
                'description' => 'Digital Locations, Inc. (OTCMKTS:DLOC), the developer of Satenna<sup>TM</sup>, a breakthrough technology that will enable delivery of high-speed Internet from satellites directly to smartphones all over the world, today announced that in a recent podcast, its CEO, Rich Berliner, spoke with Dr. Ted Rappaport, founding director of NYU Wireless, and Dr. Arjuna Madanayake, Associate Professor at Florida International University, about their work on channel modeling, precision timing, chip design, chip measurement and the future of 6G wireless...',
                'newLink' => "digital-locations-ceo-rich-berliner-discussed-future-of-6g-wireless-technology-with-top-industry-experts"
            ],
            [
                'title' => "Digital Locations Announces Satenna<sup>TM</sup> – a Satellite to Smartphone Antenna Breakthrough  ",
                'date' => 'February 6, 2024',
                'description' => 'Digital Locations, Inc. (DLOC), the developer of Satenna<sup>TM</sup>, a breakthrough technology that will enable delivery of high-speed Internet from satellites directly to smartphones all over the world, today announced that its technology team at Florida International University (FIU) is developing a solution that only requires modifications on the smartphone side. This breakthrough can potentially eliminate the need to make costly and time-consuming modifications to existing, as well as future satellites...',
                'newLink' => "digital-locations-announces-satenna-a-satellite-to-samartphone-antenna-breakthrough"
            ],
            [
                'title' => "Digital Locations Reveals Competitive Analysis ",
                'date' => 'September 6, 2023',
                'description' => 'Digital Locations, Inc. (OTCMKTS:DLOC), the developer of a disruptive technology that will deliver high-speed Internet from satellites directly to smartphones all over the world, today announced the results of the competitive analysis performed by the Florida International University (FIU) tech team...',
                'newLink' => "digital-locations-reveals-competitive-analysis"
            ],
            [
                'title' => "Digital Locations CEO Rich Berliner Discussed Technical Satellite Communications Challenges with Research Scientist",
                'date' => 'August 22, 2023',
                'description' => 'Digital Locations, Inc. (OTCMKTS:DLOC), the developer of a disruptive technology that will deliver high-speed Internet from satellites directly to smartphones all over the world, today announced that in a recent podcast, its CEO, Rich Berliner, spoke with Dr. Jian Yao, a scientist at University Corporation for Atmospheric Research...',
                'newLink' => "digital-locations-ceo-rich-berliner-discussed-technical-satellite-communications-challenges-with-research-scientist"
            ],
            [
                'title' => "Digital Locations CEO Rich Berliner Discussed the Use of Machine Learning with the Company’s Tech Team Leader",
                'date' => 'August 15, 2023',
                'description' => 'Dr. Elias Alwan from Florida International University (FIU) commented about using machine learning to overcome the challenges of delivering high-speed Internet from satellites directly to smartphones...',
                'newLink' => "digital-locations-ceo-rich-berliner-discussed-the-use-of-machine-learnin-with-the-company-tech-team-leader"
            ],
            [
                'title' => "Digital Locations CEO Rich Berliner Discussed Direct Message Capability of Indian Regional Satellites with Space Engineer",
                'date' => 'August 10, 2023',
                'description' => 'Dr. Althaf Azeez commented about the use of direct messages from NavIC to cell phones to warn communities in advance about natural disasters ...',
                'newLink' => "digital-locations-ceo-rich-berliner-discussed-direct-message-capability-of-indian-regional-satellites-with-space-engineer"
            ],
            [
                'title' => "Digital Locations Reveals More about Its Development Plan",
                'date' => 'August 8, 2023',
                'description' => 'Digital Locations CEO Rich Berliner and Dr. Arjuna Madanayake from Florida International University (FIU) discussed the tech team’s research approach ...',
                'newLink' => "digital-locations-reveals-more-about-its-development-plan"
            ],
            [
                'title' => "Digital Locations CEO Rich Berliner and Leading Space Research Scientist Discussed How Space Dust Can Interfere with Satellite Communications",
                'date' => 'August 3, 2023',
                'description' => 'Dr. Sean Bryan, Associate Research Professor at Arizona State University, suggested ways to obtain clearer transmissions from satellites to smartphones ...',
                'newLink' => "digital-locations-ceo-rich-berliner-and-leading-space-research-scientist-discussed-how-space-dust-can-interfere-with-satellite-communications"
            ],
            [
                'title' => "Digital Locations CEO Rich Berliner Discussed “Space Junk” with Aeronautics and Astronautics Engineer",
                'date' => 'August 1, 2023',
                'description' => 'Dr. Nicholas Lee, Research Engineer in Aeronautics and Astronautics at Stanford University, commented about the presence of different types of space debris...',
                'newLink' => "digital-locations-ceo-rich-berliner-discussed-space-junk-with-aeronautics-and-astronautics-engineer"
            ],
            [
                'title' => "Digital Locations CEO Rich Berliner Discussed the Potential of Direct Satellites to Smartphone Communication with Space Technology and Security Expert",
                'date' => 'July 25, 2023',
                'description' => 'Dr. Gregory Falco Assistant Professor at Cornell University, commented about the challenges of communication ambiguity and data ownership...',
                'newLink' => "digital-locations-ceo-rich-berliner-discussed-the-potential-of-direct-satellites-to-smartphone-communication-with-space-technology-and-security-expert"
            ],
            [
                'title' => "Digital Locations Reveals Technology Development Plan for Connecting Smartphones to Satellites",
                'date' => 'July 20, 2023',
                'description' => 'The Company’s technology team at Florida International University is focused initially on solving the user device side challenges to enable high-speed Internet...',
                'newLink' => "digital-locations-reveals-technology-development-plan-for-connecting-smartphones-to-satellites"
            ],
            [
                'title' => "Digital Locations Becomes Newest Member of the Satellite Industry Association",
                'date' => 'JUNE 27, 2023',
                'description' => 'The Company joins a leading group of participants in the U.S. satellite industry...',
                'newLink' => "digital-locations-becomes-newest-member-of-the-satellite-industry-association"
            ],
            [
                'title' => "Digital Locations CEO Rich Berliner Discusses the Need for High-Speed Internet Connectivity with Industry Leader",
                'date' => 'JUNE 20, 2023',
                'description' => 'John Gilbert, Executive Chairman of Prescriptive Data, comments about the need to provide building owners, managers, and tenants with...',
                'newLink' => "digital-locations-ceo-rich-berliner-discusses-the-need-for-high-speed-internet-connectivity-with-industry-leader"
            ],
            [
                'title' => "Digital Locations Announces Disruptive Satellite-to-Smartphone Technology",
                'date' => 'JUNE 8, 2023',
                'description' => "The Company is working with Florida International University to develop a disruptive technology that will deliver high-speed Internet from satellites...",
                'newLink' => "digital-locations-announces-disruptive-satellite-to-smartphone-technology"
            ],
            [
                'title' => "Digital Locations Adds 20,000 Bigbelly Locations to Its Roster of 5G Cell Sites",
                'date' => 'APRIL 12, 2022',
                'description' => "Agreement will allow the Company to accelerate the buildout of carrier small cells and new private networks nationwide SANTA BARBARA, Calif., April...",
                'newLink' => "digital-locations-adds-20000-bigbelly-locations-to-its-roster-of-5g-cell-sites"
            ],
            [
                'title' => "Digital Locations Names Industry Executive as New CEO",
                'date' => 'DECEMBER 6, 2021',
                'description' => "Rich Berliner will lead the Company in its efforts to dramatically increase its nationwide 5G small cell site footprint Santa Barbara, CA...",
                'newLink' => "digital-locations-names-industry-executive-as-new-ceo"
            ],

            [
                'title' => "Digital Locations Joins DPAA as a Strategic 5G Services Member",
                'date' => 'JULY 20, 2021',
                'description' => "The Company strengthens its position as the leader in the 5G site aggregation industry Santa Barbara, CA - July 20, 2021 -...",
                'newLink' => "digital-locations-joins-dpaa-as-a-strategic-5g-services-member"
            ],

            [
                'title' => "Digital Locations Receives Patent for Cell Site Marketplace Technology",
                'date' => 'MAY 20, 2021',
                'description' => "Issuance of US Patent No. 11,004,122 Strengthens the Company’s Technology Position Within the 5G Cell Site Marketplace Santa Barbara, CA - May...",
                'newLink' => "digital-locations-receives-patent-for-cell-site-marketplace-technology"
            ],

            [
                'title' => "Honda and Verizon 5G Agreement Could Benefit Cell Tower Companies Like Digital Locations",
                'date' => 'APRIL 14, 2021',
                'description' => "The agreement between Honda and Verizon to use 5G and edge computing to make driving safer for drivers and pedestrians may dramatically..",
                'newLink' => "honda-and-verizon-5g-agreement-could-benefit-cell-tower-companies-like-digital-locations"
            ],

            [
                'title' => "Digital Locations Completes Key Acquisition",
                'date' => 'MARCH 2, 2021',
                'description' => "Acquisition of SmallCellSite.com instantly catapults the Company into the 5G race with rights to develop 80,000 locations into revenue generation wireless cell...",
                'newLink' => "digital-locations-completes-key-acquisition"
            ],

            [
                'title' => "Digital Locations to Benefit from FCC Rule Update that Will Ease Deployment of 5G Small Cell Towers",
                'date' => 'JANUARY 21, 2021',
                'description' => "Recent rule change will reduce barriers to installing 5G, fixed wireless hub and relay antennas on commercial buildings and residential homes Santa...",
                'newLink' => "digital-locations-to-benefit-from-fcc-rule-update-that-will-ease-deployment-of-5g-small-cell-towers"
            ],

            [
                'title' => "Digital Locations to Benefit from Augmented Reality (AR) and Virtual Reality (VR) Applications Driving the Growth of 5G",
                'date' => 'NOVEMBER 12, 2020',
                'description' => "Microsoft’s HoloLens 2 adds 5G support for AR, but widespread adoption will require transmission in the true 5G super high-speed millimeter-wave (mmWave) spectrum. SANTA BARBARA – November 12, 2020 – Digital Locations, Inc. (DLOC), a...",
                'newLink' => "digital-locations-to-benefit-from-augmented-reality-ar-and-virtual-reality-vr-applications-driving-the-growth-of-5g"
            ],

            [
                'title' => "Digital Locations to Develop 5G Small Cell Sites for the 5G Revolution",
                'date' => 'NOVEMBER 10, 2020',
                'description' => "The Company will focus on partnering or co-developing a portfolio of 5G small cell sites to help meet the expected demand for...",
                'newLink' => "digital-locations-to-develop-5g-small-cell-sites-for-the-5g-revolution"
            ],

            [
                'title' => "Digital Locations Joins Experimental 5G Wireless Network",
                'date' => 'JUNE 22, 2020',
                'description' => "The Company’s application was accepted to perform research on Powder – the future of wireless networking in a city-scale “living laboratory” Santa...",
                'newLink' => "digital-locations-joins-experimental-5g-wireless-network"
            ],

            [
                'title' => "Digital Locations to Focus on Smaller Towers for the 5G Market",
                'date' => 'DECEMBER 5, 2019',
                'description' => 'Due to the technical need to place 5G "small cells" every few hundred feet, the Company expects demand for smaller towers to grow...',
                'newLink' => "digital-locations-to-focus-on-smaller-towers-for-the-5g-market"
            ],
            [
                'title' => "Digital Locations to Develop Cell Towers for the 5G Revolution",
                'date' => 'NOVEMBER 22, 2019',
                'description' => 'The Company intends to focus its resources on developing a portfolio of cell tower sites to help meet the expected demand of...',
                'newLink' => "digital-locations-to-develop-cell-towers-for-the-5g-revolution"
            ],

        ];

        // Pagination configuration
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number
        $pageSize = 5; // Number of items to display per page
        $totalItems = count($data); // Total number of items
        $totalPages = ceil($totalItems / $pageSize); // Total number of pages

        // Calculate the start and end indices for the current page
        $startIndex = ($currentPage - 1) * $pageSize;
        $endIndex = $startIndex + $pageSize;
        $paginatedData = array_slice($data, $startIndex, $pageSize);

        // Display the data for the current page
        foreach ($paginatedData as $item) {
            echo "<div class=\"news__item\">
            <h5>{$item['title']}</h5>
            <span>{$item['date']}</span>
            <p>{$item['description']}</p>
            <a href=\"/{$item['newLink']}\" class=\"theme-btn\">Read Here</a>
        </div>";
        }

        // Display pagination links
        echo '<ul class="pagination">';
        if ($currentPage > 1) {
            echo "<li class=\"page-item\"><a href=\"?page=" . ($currentPage - 1) . "\" class=\"page-link prevpage-link\" aria-label=\"Previous\"><svg width=\"15\" height=\"15\" viewBox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M5.33423 3.10635C5.20436 3.1035 5.07682 3.14115 4.96934 3.21413C4.86187 3.2871 4.77981 3.39181 4.73456 3.51358C4.68932 3.63536 4.68314 3.76818 4.71688 3.89363C4.75063 4.01908 4.82262 4.13085 4.92286 4.21349L8.74732 7.48985L4.92286 10.7651C4.85352 10.816 4.79545 10.8807 4.75229 10.9552C4.70913 11.0296 4.6818 11.1122 4.67202 11.1977C4.66224 11.2832 4.67022 11.3697 4.69545 11.452C4.72068 11.5343 4.76263 11.6105 4.81867 11.6758C4.8747 11.7411 4.94362 11.794 5.02109 11.8315C5.09857 11.8689 5.18295 11.8899 5.26893 11.8933C5.35492 11.8966 5.44066 11.8821 5.52079 11.8508C5.60093 11.8194 5.67372 11.7719 5.73462 11.7111L10.1133 7.9647C10.182 7.90602 10.2373 7.83319 10.2751 7.7511C10.313 7.66902 10.3326 7.57967 10.3326 7.48928C10.3326 7.39888 10.313 7.30954 10.2751 7.22745C10.2373 7.14537 10.182 7.07246 10.1133 7.01378L5.73462 3.26379C5.62401 3.16555 5.48214 3.10983 5.33423 3.10635Z\" fill=\"#EC2D2D\" />
            <path d=\"M4.02673 5.13424C3.95679 5.1327 3.88812 5.15297 3.83025 5.19227C3.77238 5.23156 3.72819 5.28794 3.70383 5.35351C3.67946 5.41909 3.67614 5.49061 3.69431 5.55816C3.71248 5.62571 3.75124 5.68589 3.80522 5.73039L5.86454 7.49458L3.80522 9.25816C3.76788 9.2856 3.73661 9.32044 3.71337 9.36052C3.69013 9.4006 3.67542 9.44507 3.67015 9.4911C3.66488 9.53713 3.66918 9.58375 3.68277 9.62805C3.69635 9.67234 3.71894 9.71337 3.74911 9.74853C3.77929 9.7837 3.81639 9.81222 3.85811 9.83238C3.89983 9.85254 3.94526 9.86386 3.99156 9.86564C4.03786 9.86743 4.08403 9.85966 4.12718 9.84278C4.17033 9.8259 4.20953 9.80029 4.24232 9.76755L6.60006 7.75027C6.63709 7.71867 6.66682 7.67946 6.68721 7.63526C6.70759 7.59106 6.71815 7.54295 6.71815 7.49427C6.71815 7.4456 6.70759 7.39749 6.68721 7.35329C6.66682 7.30909 6.63709 7.26983 6.60006 7.23824L4.24232 5.21901C4.18276 5.16611 4.10637 5.13611 4.02673 5.13424Z\" fill=\"#EC2D2D\" /></a> </li>";
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i == $currentPage) ? "active" : "";
            echo "<li class=\"page-item $activeClass\"><a href=\"?page=$i\" class=\"page-link\">0$i</a></li>";
        }
        if ($currentPage < $totalPages) {
            echo "<li class=\"page-item\"><a href=\"?page=" . ($currentPage + 1) . "\" class=\"page-link\" aria-label=\"Next\"><svg width=\"15\" height=\"15\" viewBox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M5.33423 3.10635C5.20436 3.1035 5.07682 3.14115 4.96934 3.21413C4.86187 3.2871 4.77981 3.39181 4.73456 3.51358C4.68932 3.63536 4.68314 3.76818 4.71688 3.89363C4.75063 4.01908 4.82262 4.13085 4.92286 4.21349L8.74732 7.48985L4.92286 10.7651C4.85352 10.816 4.79545 10.8807 4.75229 10.9552C4.70913 11.0296 4.6818 11.1122 4.67202 11.1977C4.66224 11.2832 4.67022 11.3697 4.69545 11.452C4.72068 11.5343 4.76263 11.6105 4.81867 11.6758C4.8747 11.7411 4.94362 11.794 5.02109 11.8315C5.09857 11.8689 5.18295 11.8899 5.26893 11.8933C5.35492 11.8966 5.44066 11.8821 5.52079 11.8508C5.60093 11.8194 5.67372 11.7719 5.73462 11.7111L10.1133 7.9647C10.182 7.90602 10.2373 7.83319 10.2751 7.7511C10.313 7.66902 10.3326 7.57967 10.3326 7.48928C10.3326 7.39888 10.313 7.30954 10.2751 7.22745C10.2373 7.14537 10.182 7.07246 10.1133 7.01378L5.73462 3.26379C5.62401 3.16555 5.48214 3.10983 5.33423 3.10635Z\" fill=\"#EC2D2D\" />
            <path d=\"M4.02673 5.13424C3.95679 5.1327 3.88812 5.15297 3.83025 5.19227C3.77238 5.23156 3.72819 5.28794 3.70383 5.35351C3.67946 5.41909 3.67614 5.49061 3.69431 5.55816C3.71248 5.62571 3.75124 5.68589 3.80522 5.73039L5.86454 7.49458L3.80522 9.25816C3.76788 9.2856 3.73661 9.32044 3.71337 9.36052C3.69013 9.4006 3.67542 9.44507 3.67015 9.4911C3.66488 9.53713 3.66918 9.58375 3.68277 9.62805C3.69635 9.67234 3.71894 9.71337 3.74911 9.74853C3.77929 9.7837 3.81639 9.81222 3.85811 9.83238C3.89983 9.85254 3.94526 9.86386 3.99156 9.86564C4.03786 9.86743 4.08403 9.85966 4.12718 9.84278C4.17033 9.8259 4.20953 9.80029 4.24232 9.76755L6.60006 7.75027C6.63709 7.71867 6.66682 7.67946 6.68721 7.63526C6.70759 7.59106 6.71815 7.54295 6.71815 7.49427C6.71815 7.4456 6.70759 7.39749 6.68721 7.35329C6.66682 7.30909 6.63709 7.26983 6.60006 7.23824L4.24232 5.21901C4.18276 5.16611 4.10637 5.13611 4.02673 5.13424Z\" fill=\"#EC2D2D\" /></a></li>";
        }
        echo "</ul>";
        ?>
    </div>
</section>


<?php
include('footer.php'); ?>