<?php
include_once('includes/header.php');
include_once('includes/navbar.php');
?>
<div class="container1">
    <h3 class="title mb-3"><u>PRODUCTS</u></h3>
    <div class="tab-container mb-3">
        <input type="radio" id="tab-all" name="product-tab" checked>
        <label for="tab-all">All Products</label>
        <input type="radio" id="tab-web" name="product-tab">
        <label for="tab-web">Hardware</label>
        <input type="radio" id="tab-uiux" name="product-tab">
        <label for="tab-uiux">Software</label>
    </div>
    <br>
    <div class="products-container">
        <div class="product hardware" data-name="p-1">
            <img src="image/laptop-2.png" alt="Laptop">
            <h3>Laptop</h3>
        </div>
        <div class="product hardware" data-name="p-2">
            <img src="image/printer.png" alt="Printers">
            <h3>Printers</h3>
        </div>
        <div class="product hardware" data-name="p-3">
            <img src="image/desktop.png" alt="Desktop (Branded)">
            <h3>Desktop (Branded)</h3>
        </div>
        <div class="product hardware" data-name="p-4">
            <img src="image/desktop.png" alt="Desktop (Custom Build)">
            <h3>Desktop (Custom Build)</h3>
        </div>
        <div class="product hardware" data-name="p-5">
            <img src="image/POS.png" alt="POS (Point of Sale)">
            <h3>POS (Point of Sale)</h3>
        </div>
        <div class="product hardware" data-name="p-6">
            <img src="image/magic-card.png" alt="ID Card Printer">
            <h3>ID Card Printer</h3>
        </div>
        <div class="product hardware" data-name="p-7">
            <img src="image/Server.png" alt="Servers">
            <h3>Servers</h3>
        </div>
        <div class="product hardware" data-name="p-8">
            <img src="image/data-cabinet.png" alt="Security Product">
            <h3>Security Product</h3>
        </div>
        <div class="product hardware" data-name="p-9">
            <img src="image/UPS cabinet type.png" alt="UPS (Uninterruptible Power Supply) Cabinet Type">
            <h3>UPS (Uninterruptible Power Supply) Cabinet Type</h3>
        </div>
        <div class="product hardware" data-name="p-10">
            <img src="image/inkjet.png" alt=">Inkjet">
            <h3>Inkjet</h3>
        </div>

        <div class="product hardware" data-name="p-11">
            <img src="image/cctv.png" alt="CCTV">
            <h3>CCTV</h3>
        </div>

        <div class="product software" data-name="p-12">
            <img src="image/POS-system.png" alt="POS (Point of Sale)">
            <h3>POS (Point of Sale)</h3>
        </div>
        <div class="product software" data-name="p-13">
            <img src="image/POS-inventory.png" alt="POS Inventory">
            <h3>POS Inventory</h3>
        </div>
        <div class="product software" data-name="p-14">
            <img src="image/POS-ticketing.png" alt="Service Ticketing">
            <h3>Service Ticketing</h3>
        </div>
    
        <div class="product software" data-name="p-15">
            <img src="image/asset-management-software.png" alt="Asset Management">
            <h3>Asset Management</h3>
        </div>
        <div class="product software" data-name="p-16">
            <img src="image/CRM.png" alt="CRM (Customer Relationship Management)">
            <h3>CRM (Customer Relationship Management)</h3>
        </div>
    </div>
</div>

<div class="custom-pagination my-4">
    <button id="prevPageBtn" onclick="prevPage()">Previous</button>
    <span id="pageNumbers"></span>
    <button id="nextPageBtn" onclick="nextPage()">Next</button>
</div>

<div class="products-preview d-none">
    <div class="preview" data-target="p-1">
        <i class="fas fa-times"></i>
        <img src="image/laptop-2.png" alt="Laptop">
        <h3>Laptop</h3>
        <div class="scrollable-content">
            <p>Refers to a portable computer manufactured by a specific company. It typically includes components such as a CPU, RAM, storage, and display, designed for personal or professional use on the go.</p>
        </div>
    </div>
    <div class="preview" data-target="p-2">
        <i class="fas fa-times"></i>
        <img src="image/printer.png" alt="Printers">
        <h3>Printers</h3>
        <p>Devices used to produce physical copies of documents or images from digital files. They can be inkjet, laser, or thermal, with varying speeds and capabilities.</p>
    </div>
    <div class="preview" data-target="p-3">
        <i class="fas fa-times"></i>
        <img src="image/desktop.png" alt="Desktop (Branded)">
        <h3>Desktop (Branded)</h3>
        <p>A stationary computer system that can be purchased pre-built from a specific brand or customized with selected components for specific performance needs or preferences.</p>
    </div>
    <div class="preview" data-target="p-4">
        <i class="fas fa-times"></i>
        <img src="image/desktop.png" alt="Desktop (Custom Build)">
        <h3>Desktop (Custom Build)</h3>
        <p>A stationary computer system that can be purchased pre-built from a specific brand or customized with selected components for specific performance needs or preferences.</p>
    </div>
    <div class="preview" data-target="p-5">
        <i class="fas fa-times"></i>
        <img src="image/POS.png" alt="POS (Point of Sale)">
        <h3>POS (Point of Sale)</h3>
        <p>Hardware and software system used in retail or hospitality environments to facilitate transactions, manage inventory, and generate sales reports.</p>
    </div>
    <div class="preview" data-target="p-6">
        <i class="fas fa-times"></i>
        <img src="image/magic-card.png" alt="ID Card Printer">
        <h3>ID Card Printer</h3>
        <p>A brand of ID card printers known for producing high-quality identification cards, badges, and access cards with various security features.</p>
    </div>
    <div class="preview" data-target="p-7">
        <i class="fas fa-times"></i>
        <img src="image/Server.png" alt="Servers">
        <h3>Servers</h3>
        <p>Computers designed to provide data, resources, or services to other computers or devices on a network. They can be used for hosting websites, managing databases, or running applications.</p>
    </div>
    <div class="preview" data-target="p-8">
        <i class="fas fa-times"></i>
        <img src="image/data-cabinet.png" alt="Security Product">
        <h3>Security Product</h3>
        <p>A secure enclosure used to house and organize networking equipment such as servers, switches, routers, and cables in a data center or server room.</p>
    </div>
    <div class="preview" data-target="p-9">
        <i class="fas fa-times"></i>
        <img src="image/UPS cabinet type.png" alt="UPS (Uninterruptible Power Supply) Cabinet Type">
        <h3>UPS (Uninterruptible Power Supply) Cabinet Type</h3>
        <p>A cabinet housing UPS units, which provide backup power to devices in case of mains power failure, ensuring continuous operation and preventing data loss or damage.</p>
    </div>
    <div class="preview" data-target="p-10">
        <i class="fas fa-times"></i>
        <img src="image/inkjet.png" alt="Inkjet">
        <h3>Inkjet</h3>
        <p>A type of printer that sprays ink onto paper to create text or images. Inkjet printers are known for their versatility in printing documents, photos, and graphics with high color accuracy.</p>
    </div>
    <div class="preview" data-target="p-11">
        <i class="fas fa-times"></i>
        <img src="image/cctv.png" alt="CCTV">
        <h3>CCTV</h3>
        <p>Enhance security and peace of mind with our CCTV systems. Offering high-definition video, remote monitoring, and customizable options, our solutions keep you connected and protected 24/7. Explore our range for residential and commercial needs.</p>
    </div>

    <div class="preview" data-target="p-12">
        <i class="fas fa-times"></i>
        <img src="image/POS-system.png" alt="POS (Point of Sale)">
        <h3>POS (Point of Sale)</h3>
        <p>Software component of a POS system that handles transactions, inventory management, sales reporting, and customer interactions in retail or hospitality settings.</p>
    </div>
    <div class="preview" data-target="p-13">
        <i class="fas fa-times"></i>
        <img src="image/POS-inventory.png" alt=">POS Inventory">
        <h3>POS Inventory</h3>
        <p>Software module focused specifically on managing and tracking inventory levels, orders, and stock movements within a POS system.</p>
    </div>
    <div class="preview" data-target="p-14">
        <i class="fas fa-times"></i>
        <img src="image/POS-ticketing.png" alt="Service Ticketing">
        <h3>Service Ticketing</h3>
        <p>Software functionality within a POS system that manages ticketing, reservations, or appointments for services such as events, dining, or appointments in businesses.</p>
    </div>
    <div class="preview" data-target="p-15">
        <i class="fas fa-times"></i>
        <img src="image/asset-management-software.png" alt="Asset Management">
        <h3>Asset Management</h3>
        <p>Software for tracking and managing assets such as equipment, tools, vehicles, and IT hardware throughout their lifecycle, including procurement, maintenance, and disposal.</p>
    </div>
    <div class="preview" data-target="p-16">
        <i class="fas fa-times"></i>
        <img src="image/CRM.png" alt="CRM (Customer Relationship Management)">
        <h3>CRM (Customer Relationship Management)</h3>
        <p>Software that helps businesses manage interactions with current and potential customers, including organizing customer data, tracking sales opportunities, and improving customer service and retention.</p>
    </div>
</div>
<?php
include_once('includes/footer.php');