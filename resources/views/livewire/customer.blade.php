<div>
    <div class="card">
        <div class="card-header col card-header text-left">
            <div class="row align-items-right">
                <div class="col-md-3">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-master-order">
                        Tambah Data
                    </button>
                </div>
                <div class="col-md-3 offset-md-6"><label class="text-right g-col-6">
                        <input type="search" class="form-control form-control-md " wire:model="search"
                            placeholder="Search">
                    </label>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive" id="proTeamScroll" tabindex="2"
                style="height: 400px; overflow: hidden; outline: none;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Cust.</th>
                            <th>Project</th>
                            <th>Assign Date</th>
                            <th>Team</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar8.png"
                                    alt="">
                            </td>
                            <td>
                                <h6 class="mb-0 font-13">Wordpress Website</h6>
                                <p class="m-0 font-12">
                                    Assigned to<span class="col-green font-weight-bold"> Airi Satou</span>
                                </p>
                            </td>
                            <td>20-02-2018</td>
                            <td class="text-truncate">
                                <ul class="list-unstyled order-list m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                    </li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="badge-outline col-red">High</div>
                            </td>
                            <td class="align-middle">
                                <div class="progress-text">50%</div>
                                <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-success" data-width="50%" style="width: 50%;"></div>
                                </div>
                            </td>
                            <td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)">Delete</a>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    alt="">
                            </td>
                            <td>
                                <h6 class="mb-0 font-13">Android Game App</h6>
                                <p class="m-0 font-12">
                                    Assigned to<span class="col-green font-weight-bold"> Sarah Smith</span>
                                </p>
                            </td>
                            <td>22-05-2019</td>
                            <td class="text-truncate">
                                <ul class="list-unstyled order-list m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                    </li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="badge-outline col-green">Low</div>
                            </td>
                            <td class="align-middle">
                                <div class="progress-text">55%</div>
                                <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-purple" data-width="55%" style="width: 55%;"></div>
                                </div>
                            </td>
                            <td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)">Delete</a>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                    alt="">
                            </td>
                            <td>
                                <h6 class="mb-0 font-13">Java Web Service</h6>
                                <p class="m-0 font-12">
                                    Assigned to<span class="col-green font-weight-bold"> Cara
                                        Stevens</span>
                                </p>
                            </td>
                            <td>11-04-2019</td>
                            <td class="text-truncate">
                                <ul class="list-unstyled order-list m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                    </li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                    </li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                </ul>
                            </td>
                            <td>
                                <div class="badge-outline col-blue">Medium</div>
                            </td>
                            <td class="align-middle">
                                <div class="progress-text">70%</div>
                                <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar" data-width="70%" style="width: 70%;"></div>
                                </div>
                            </td>
                            <td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)">Delete</a>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                    alt="">
                            </td>
                            <td>
                                <h6 class="mb-0 font-13">Wedding IOS App</h6>
                                <p class="m-0 font-12">
                                    Assigned to<span class="col-green font-weight-bold"> John Doe</span>
                                </p>
                            </td>
                            <td>19-05-2019</td>
                            <td class="text-truncate">
                                <ul class="list-unstyled order-list m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                    </li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                    </li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                </ul>
                            </td>
                            <td>
                                <div class="badge-outline col-red">High</div>
                            </td>
                            <td class="align-middle">
                                <div class="progress-text">45%</div>
                                <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-cyan" data-width="45%" style="width: 45%;"></div>
                                </div>
                            </td>
                            <td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)">Delete</a>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                    alt="">
                            </td>
                            <td>
                                <h6 class="mb-0 font-13">Blize Admin Template</h6>
                                <p class="m-0 font-12">
                                    Assigned to<span class="col-green font-weight-bold"> Ashton Cox</span>
                                </p>
                            </td>
                            <td>25-07-2019</td>
                            <td class="text-truncate">
                                <ul class="list-unstyled order-list m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                    </li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                    </li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                </ul>
                            </td>
                            <td>
                                <div class="badge-outline col-blue">Medium</div>
                            </td>
                            <td class="align-middle">
                                <div class="progress-text">67%</div>
                                <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-red" data-width="67%" style="width: 67%;"></div>
                                </div>
                            </td>
                            <td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)">Delete</a>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                    alt="">
                            </td>
                            <td>
                                <h6 class="mb-0 font-13">React js website</h6>
                                <p class="m-0 font-12">
                                    Assigned to<span class="col-green font-weight-bold"> Sarah Smith
                                    </span>
                                </p>
                            </td>
                            <td>11-08-2019</td>
                            <td class="text-truncate">
                                <ul class="list-unstyled order-list m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                    </li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                    </li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                </ul>
                            </td>
                            <td>
                                <div class="badge-outline col-green">Low</div>
                            </td>
                            <td class="align-middle">
                                <div class="progress-text">41%</div>
                                <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-orange" data-width="41%" style="width: 41%;"></div>
                                </div>
                            </td>
                            <td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)">Delete</a>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    alt="">
                            </td>
                            <td>
                                <h6 class="mb-0 font-13">SEO improvement</h6>
                                <p class="m-0 font-12">
                                    Assigned to<span class="col-green font-weight-bold"> Janak
                                        Gandhi</span>
                                </p>
                            </td>
                            <td>22-02-2018</td>
                            <td class="text-truncate">
                                <ul class="list-unstyled order-list m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                    </li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                    </li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                </ul>
                            </td>
                            <td>
                                <div class="badge-outline col-red">High</div>
                            </td>
                            <td class="align-middle">
                                <div class="progress-text">70%</div>
                                <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-success" data-width="70%" style="width: 70%;"></div>
                                </div>
                            </td>
                            <td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)">Delete</a>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                    alt="">
                            </td>
                            <td>
                                <h6 class="mb-0 font-13">Laravel Website</h6>
                                <p class="m-0 font-12">
                                    Assigned to<span class="col-green font-weight-bold"> Mili Rain</span>
                                </p>
                            </td>
                            <td>31-03-2019</td>
                            <td class="text-truncate">
                                <ul class="list-unstyled order-list m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                    </li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user"
                                            data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                    </li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                </ul>
                            </td>
                            <td>
                                <div class="badge-outline col-green">Low</div>
                            </td>
                            <td class="align-middle">
                                <div class="progress-text">55%</div>
                                <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-purple" data-width="55%" style="width: 55%;"></div>
                                </div>
                            </td>
                            <td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)">Delete</a>
                            </td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
