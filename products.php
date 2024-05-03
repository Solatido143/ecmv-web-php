<?php
include_once('connect/dbcon.php');
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
            <img src="image/laptop-2.png" alt="">
            <h3>Laptop</h3>
        </div>
        <div class="product hardware" data-name="p-2">
            <img src="image/printer.png" alt="">
            <h3>Printers</h3>
        </div>
        <div class="product hardware" data-name="p-3">
            <img src="image/desktop.png" alt="">
            <h3>Desktop (Branded)</h3>
        </div>
        <div class="product hardware" data-name="p-4">
            <img src="image/desktop.png" alt="">
            <h3>Desktop (Custom Build)</h3>
        </div>
        <div class="product hardware" data-name="p-5">
            <img src="image/POS.png" alt="">
            <h3>POS (Point of Sale)</h3>
        </div>
        <div class="product hardware" data-name="p-6">
            <img src="image/magic-card.png" alt="">
            <h3> ID Card Printer</h3>
        </div>
        <div class="product hardware" data-name="p-7">
            <img src="image/Server.png" alt="">
            <h3>Servers</h3>
        </div>
        <div class="product hardware" data-name="p-8">
            <img src="image/data-cabinet.png" alt="">
            <h3>Data Cabinet</h3>
        </div>
        <div class="product hardware" data-name="p-9">
            <img src="image/UPS cabinet type.png" alt="">
            <h3>UPS (Uninterruptible Power Supply) Cabinet Type</h3>
        </div>
        <div class="product hardware" data-name="p-10">
            <img src="image/inkjet.png" alt="">
            <h3>Inkjet</h3>
        </div>

        <div class="product software" data-name="p-11">
            <img src="image/POS-system.png" alt="">
            <h3>POS (Point of Sale)</h3>
        </div>
        <div class="product software" data-name="p-12">
            <img src="image/POS-inventory.png" alt="">
            <h3>POS Inventory</h3>
        </div>
        <div class="product software" data-name="p-13">
            <img src="image/POS-ticketing.png" alt="">
            <h3>POS Ticketing</h3>
        </div>
        <div class="product software" data-name="p-14">
            <img src="image/water-district-automation.png" alt="">
            <h3>Water District Automation</h3>
        </div>
        <div class="product software" data-name="p-15">
            <img src="image/asset-management-software.png" alt="">
            <h3>Asset Management</h3>
        </div>
        <div class="product software" data-name="p-16">
            <img src="image/CRM.png" alt="">
            <h3>CRM (Customer Relationship Management)</h3>
        </div>
    </div>
</div>

<div class="pagination my-4">
    <button id="prevPageBtn" onclick="prevPage()">Previous</button>
    <span id="pageNumbers"></span>
    <button id="nextPageBtn" onclick="nextPage()">Next</button>
</div>

<div class="products-preview">
    <?php
    $supplies_sql = "SELECT * FROM supplies";
    $supplies_result = $conn->query($supplies_sql);
    $supplies_data = [];
    if ($supplies_result->num_rows > 0) {
        while ($supply_row = $supplies_result->fetch_assoc()) {
            $supplies_data[] = [
                'item_name' => $supply_row["item_name"],
                'description' => $supply_row["description"]
            ];
        }
    } else {
        $supplies_data[] = [
            'item_name' => 'No supplies found',
            'description' => ''
        ];
    }
    ?>
    <div class="preview" data-target="p-1">
        <i class="fas fa-times"></i>
        <img src="image/laptop-2.png" alt="">
        <h3>Laptop</h3>
        <div class="accordion rounded" id="accordionExample" style="border: 1px solid #ff1414">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Lenovo
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body rounded-bottom">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($supplies_data as $supply) : ?>
                                <tr>
                                    <th scope="row"><?= $supply['item_name'] ?></th>
                                    <td><?= $supply['description'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="preview" data-target="p-2">
        <i class="fas fa-times"></i>
        <img src="image/printer.png" alt="">
        <h3>Printers</h3>
        <p>Devices used to produce physical copies of documents or images from digital files. They can be inkjet, laser, or thermal, with varying speeds and capabilities.</p>
    </div>
    <div class="preview" data-target="p-3">
        <i class="fas fa-times"></i>
        <img src="image/desktop.png" alt="">
        <h3>Desktop (Branded)</h3>
        <p>A stationary computer system that can be purchased pre-built from a specific brand or customized with selected components for specific performance needs or preferences.</p>
    </div>
    <div class="preview" data-target="p-4">
        <i class="fas fa-times"></i>
        <img src="image/desktop.png" alt="">
        <h3>Desktop (Custom Build)</h3>
        <p>A stationary computer system that can be purchased pre-built from a specific brand or customized with selected components for specific performance needs or preferences.</p>
    </div>
    <div class="preview" data-target="p-5">
        <i class="fas fa-times"></i>
        <img src="image/POS.png" alt="">
        <h3>POS (Point of Sale)</h3>
        <p>Hardware and software system used in retail or hospitality environments to facilitate transactions, manage inventory, and generate sales reports.</p>
    </div>
    <div class="preview" data-target="p-6">
        <i class="fas fa-times"></i>
        <img src="image/magic-card.png" alt="">
        <h3>ID Card Printer</h3>
        <p>A brand of ID card printers known for producing high-quality identification cards, badges, and access cards with various security features.</p>
    </div>
    <div class="preview" data-target="p-7">
        <i class="fas fa-times"></i>
        <img src="image/Server.png" alt="">
        <h3>Servers</h3>
        <p>Computers designed to provide data, resources, or services to other computers or devices on a network. They can be used for hosting websites, managing databases, or running applications.</p>
    </div>
    <div class="preview" data-target="p-8">
        <i class="fas fa-times"></i>
        <img src="image/data-cabinet.png" alt="">
        <h3>Data Cabinet</h3>
        <p>A secure enclosure used to house and organize networking equipment such as servers, switches, routers, and cables in a data center or server room.</p>
    </div>
    <div class="preview" data-target="p-9">
        <i class="fas fa-times"></i>
        <img src="image/UPS cabinet type.png" alt="">
        <h3>UPS (Uninterruptible Power Supply) Cabinet Type</h3>
        <p>A cabinet housing UPS units, which provide backup power to devices in case of mains power failure, ensuring continuous operation and preventing data loss or damage.</p>
    </div>
    <div class="preview" data-target="p-10">
        <i class="fas fa-times"></i>
        <img src="image/inkjet.png" alt="">
        <h3>Inkjet</h3>
        <p>A type of printer that sprays ink onto paper to create text or images. Inkjet printers are known for their versatility in printing documents, photos, and graphics with high color accuracy.</p>
    </div>

    <div class="preview" data-target="p-11">
        <i class="fas fa-times"></i>
        <img src="image/POS-system.png" alt="">
        <h3>POS (Point of Sale)</h3>
        <p>Software component of a POS system that handles transactions, inventory management, sales reporting, and customer interactions in retail or hospitality settings.</p>
    </div>
    <div class="preview" data-target="p-12">
        <i class="fas fa-times"></i>
        <img src="image/POS-inventory.png" alt="">
        <h3>POS Inventory</h3>
        <p>Software module focused specifically on managing and tracking inventory levels, orders, and stock movements within a POS system.</p>
    </div>
    <div class="preview" data-target="p-13">
        <i class="fas fa-times"></i>
        <img src="image/POS-ticketing.png" alt="">
        <h3>POS Ticketing</h3>
        <p>Software functionality within a POS system that manages ticketing, reservations, or appointments for services such as events, dining, or appointments in businesses.</p>
    </div>
    <div class="preview" data-target="p-14">
        <i class="fas fa-times"></i>
        <img src="image/water-district-automation.png" alt="">
        <h3>Water District Automation</h3>
        <p>Software designed for automating processes related to managing water distribution systems, including meter readings, billing, maintenance, and customer service in water utility companies.</p>
    </div>
    <div class="preview" data-target="p-15">
        <i class="fas fa-times"></i>
        <img src="image/asset-management-software.png" alt="">
        <h3>Asset Management</h3>
        <p>Software for tracking and managing assets such as equipment, tools, vehicles, and IT hardware throughout their lifecycle, including procurement, maintenance, and disposal.</p>
    </div>
    <div class="preview" data-target="p-16">
        <i class="fas fa-times"></i>
        <img src="image/CRM.png" alt="">
        <h3>CRM (Customer Relationship Management)</h3>
        <p>Software that helps businesses manage interactions with current and potential customers, including organizing customer data, tracking sales opportunities, and improving customer service and retention.</p>
    </div>
</div>
<?php
include_once('includes/footer.php');
?>