<div class="col col-md-3">
  <div class=" d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 70vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <span class="fs-4">SIDEBAR</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php?url=index" class="nav-link <?php echo (isset($_GET["url"]) && $_GET["url"] == "index") ? 'active' : 'link-dark'; ?>">
          <svg class="bi pe-none me-2" width="16" height="16">
            <use xlink:href="#home" />
          </svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="orders.php?url=orders" class="nav-link <?php echo (isset($_GET["url"]) && $_GET["url"] == "orders") ? 'active' : 'link-dark'; ?>">
          <svg class="bi pe-none me-2" width="16" height="16">
            <use xlink:href="#table" />
          </svg>
          Orders
        </a>
      </li>
      <li>
        <a href="product.php?url=product" class="nav-link <?php echo (isset($_GET["url"]) && $_GET["url"] == "product") ? 'active' : 'link-dark'; ?>">
          <svg class="bi pe-none me-2" width="16" height="16">
            <use xlink:href="#grid" />
          </svg>
          Products
        </a>
      </li>
      <li>
        <a href="customer.php?url=customer" class="nav-link <?php echo (isset($_GET["url"]) && $_GET["url"] == "customer") ? 'active' : 'link-dark'; ?>">
          <svg class="bi pe-none me-2" width="16" height="16">
            <use xlink:href="#people-circle" />
          </svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
  </div>
</div>
