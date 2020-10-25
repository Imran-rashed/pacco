<!-- User Edit Modal -->
<div class="modal" id="rolechange-modal" tabindex="-1" role="dialog" aria-labelledby="rolechange-modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rolechange-modalTitle">Change Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <select class="form-control">
                        <option>Manager</option>
                        <option>Editor</option>
                        <option>Viewer</option>
                    </select>
                    <button type="submit">save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Customer Create Modal -->
<div class="modal" id="customercreate-modal" tabindex="-1" role="dialog" aria-labelledby="customercreate-modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customercreate-modalTitle">Customer Create</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="text" class="form-control" placeholder="Customer name"> <br>
                    <input type="text" class="form-control" placeholder="Shop name"><br>
                    <input type="email" class="form-control" placeholder="Email"><br>
                    <input type="text" class="form-control" placeholder="Phone"><br>
                    <input type="text" class="form-control" placeholder="Location"><br>
                    <input type="text" class="form-control" placeholder="Cap"><br>
                    <input type="text" class="form-control" placeholder="Street"><br>
                    <input type="file" class="form-control" placeholder="Email">
                    <button type="submit">save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Customer Edit Modal -->
<div class="modal" id="customeredit-modal" tabindex="-1" role="dialog" aria-labelledby="customeredit-modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customeredit-modalTitle">Customer Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="text" class="form-control" value="asdfasdfasfd"><br>
                    <input type="text" class="form-control" value="asdfasdfasfd"><br>
                    <input type="email" class="form-control" value="asdfasdfasfd"><br>
                    <input type="text" class="form-control" value="asdfasdfasfd"><br>
                    <input type="text" class="form-control" value="asdfasdfasfd"><br>
                    <input type="text" class="form-control" value="asdfasdfasfd"><br>
                    <input type="text" class="form-control" value="asdfasdfasfd"><br>
                    <input type="file"><br>
                    <button type="submit">save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Customer Tariff Create Modal -->
<div class="modal" id="createtariff-modal" tabindex="-1" role="dialog" aria-labelledby="createtariff-modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createtariff-modalTitle">Customer Tariff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <select class="form-control">
                        <option>0 – 1.9 Kg</option>
                        <option>2 – 4.9 Kg</option>
                        <option>2- 4.9 Kg</option>
                    </select><br>
                    <select class="form-control">
                        <option>Standard</option>
                        <option>Express</option>
                    </select><br>
                    <input type="text" class="form-control" placeholder="Price">
                    <button type="submit">save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!------- Document upload ------->
<div class="modal fade" id="docUploadModal" tabindex="-1" role="dialog" aria-labelledby="docUploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="docUploadModalLabel">Upload Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="docFile">Document</label>
                        <input type="file" class="form-control-file form-control" id="docFile">
                    </div>
                    <button type="send" class="btn send-btn float-right">Send <span class="material-icons">send</span></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!------- Invoice upload ------->
<div class="modal fade" id="invoiceUploadModal" tabindex="-1" role="dialog" aria-labelledby="invoiceUploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="invoiceUploadModalLabel">Upload Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Document</label>
                        <input type="file" class="form-control-file form-control">
                    </div>
                    <button type="submit" class="btn send-btn float-right">Send <span class="material-icons">send</span></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Payment confirmation Modal -->
<div class="modal" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalTitle">Payment Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <select class="form-control">
                        <option>Unpaid</option>
                        <option>Paid</option>
                    </select><br>
                    <button type="submit" class="btn float-right">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Unblock confirmation Modal -->
<div class="modal" id="unblockModal" tabindex="-1" role="dialog" aria-labelledby="unblockModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="unblockModalTitle">Unblock Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <p>Unblock it.</p>
                    <button type="submit" class="btn float-right">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>