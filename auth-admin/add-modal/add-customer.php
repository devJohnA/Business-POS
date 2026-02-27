<div class="card-body">
    <div class="row gy-3">
        <!-- Default Modal -->
        <div class="col-lg-4 col-md-6">
            <div class="mt-4">
                <!-- Button trigger modal -->
                <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#basicModal">
                    Add Customer
                </button>

                <!-- Modal -->
                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-6">
                                        <label for="nameBasic" class="form-label">Name (Optional)</label>
                                        <input
                                            type="text"
                                            id="nameBasic"
                                            class="form-control"
                                            placeholder="Enter Name" />
                                    </div>
                                </div>
                                <div class="row g-6">
                                    <div class="col mb-0">
                                        <select class="form-select" id="selectBasic">
                                            <option selected>Choose Product</option>
                                            <option value="1">Rice 1kg</option>
                                            <option value="2">Egg 1 tray</option>
                                        </select>
                                    </div>
                                    <div class="col mb-0">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Enter Price" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>