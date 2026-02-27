<?php 
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
?>
              <!-- Basic Bootstrap Table -->

              <!-- Contextual Classes -->

              <div class="card">
                <h5 class="card-header">Customer Records</h5>
                <div class="table-responsive text-nowrap">
                  <table id="myTable" class="table" >
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Goods</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Actions</th>                  
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><span>16345</span></td>
                        <td>Sarah Banks</td>
                        <td>
                          <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller">
                              <img src="../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson">
                              <img src="../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker">
                              <img src="../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                         <td><span>₱ 540</span></td>
                        <td><span class="badge text-bg-warning">Paid</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="icon-base bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="icon-base bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="icon-base bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Contextual Classes -->


    <?php 
    include 'partials/footer.php';
    ?>