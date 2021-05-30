<style>

/* EMAIL */
.own-nav ul{
    display: block;
}
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}
.pagination>li {
    display: inline;
}
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
}
.inbox .pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.own-dropdown li a{
    padding: 5px;
    color: #000;
    display: block;
}
.own-dropdown li a:hover{
    background: #efefef;
}
.inbox .input-group {
    position: relative;
    display: table;
    border-collapse: separate;
}
.inbox .input-group-btn {
    position: relative;
    font-size: 0;
    white-space: nowrap;
}
.inbox .own-nav ul li a{
    display: block;
    padding: 10px 6px;
}
.inbox .btn-inbox-search{
    border-radius: 3px;
    top: -40px;
    padding: 9px;
}
.inbox .email {
    padding: 20px 10px 15px 10px;
    font-size: 1em;
}

.inbox .email .btn.search {
    font-size: 0.9em;
}

.inbox .email h2 {
    margin-top: 0;
    padding-bottom: 8px;
}

.inbox .email .nav.nav-pills > li > a {
    border-top: 3px solid transparent;
}

.inbox .email .nav.nav-pills > li > a > .fa {
    margin-right: 5px;
}

.inbox .email .nav.nav-pills > li.active > a,
.inbox .email .nav.nav-pills > li.active > a:hover {
    background-color: #f6f6f6;
    border-top-color: #3c8dbc;
}

.inbox .email .nav.nav-pills > li.active > a {
    font-weight: 600;
}

.inbox .email .nav.nav-pills > li > a:hover {
    background-color: #f6f6f6;
}

.inbox .email .nav.nav-pills.nav-stacked > li > a {
    color: #666;
    border-top: 0;
    border-left: 3px solid transparent;
    border-radius: 0px;
}

.inbox .email .nav.nav-pills.nav-stacked > li.active > a,
.inbox .email .nav.nav-pills.nav-stacked > li.active > a:hover {
    background-color: #f6f6f6;
    border-left-color: #3c8dbc;
    color: #444;
}

.inbox .email .nav.nav-pills.nav-stacked > li.header {
    color: #777;
    text-transform: uppercase;
    position: relative;
    padding: 0px 0 10px 0;
}

.inbox .email table {
    font-weight: 600;
}

.inbox .email table a {
    color: #666;
}

.inbox .email table tr.read > td {
    background-color: #f6f6f6;
}

.inbox .email table tr.read > td {
    font-weight: 400;
}

.inbox .email table tr td > i.fa {
    font-size: 1.2em;
    line-height: 1.5em;
    text-align: center;
}

.inbox .email table tr td > i.fa-star {
    color: #f39c12;
}

.inbox .email table tr td > i.fa-bookmark {
    color: #e74c3c;
}

.inbox .email table tr > td.action {
    padding-left: 0px;
    padding-right: 2px;
}

.inbox .grid {
    position: relative;
    width: 100%;
    background: #fff;
    color: #666666;
    border-radius: 2px;
    margin-bottom: 25px;
    box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
}



.inbox .grid .grid-header:after {
    clear: both;
}

.inbox .grid .grid-header span,
.inbox .grid .grid-header > .fa {
    display: inline-block;
    margin: 0;
    font-weight: 300;
    font-size: 1.5em;
    float: left;
}

.inbox .grid .grid-header span {
    padding: 0 5px;
}

.inbox .grid .grid-header > .fa {
    padding: 5px 10px 0 0;
}

.inbox .grid .grid-header > .grid-tools {
    padding: 4px 10px;
}

.inbox .grid .grid-header > .grid-tools a {
    color: #999999;
    padding-left: 10px;
    cursor: pointer;
}

.inbox .grid .grid-header > .grid-tools a:hover {
    color: #666666;
}

.inbox .grid .grid-body {
    padding: 15px 20px 15px 20px;
    font-size: 0.9em;
    line-height: 1.9em;
}

.inbox .grid .full {
    padding: 0 !important;
}

.inbox .grid .transparent {
    box-shadow: none !important;
    margin: 0px !important;
    border-radius: 0px !important;
}

.inbox .grid.top.black > .grid-header {
    border-top-color: #000000 !important;
}

.inbox .grid.bottom.black > .grid-body {
    border-bottom-color: #000000 !important;
}

.inbox .grid.top.blue > .grid-header {
    border-top-color: #007be9 !important;
}

.inbox .grid.bottom.blue > .grid-body {
    border-bottom-color: #007be9 !important;
}

.inbox .grid.top.green > .grid-header {
    border-top-color: #00c273 !important;
}

.inbox .grid.bottom.green > .grid-body {
    border-bottom-color: #00c273 !important;
}

.inbox .grid.top.purple > .grid-header {
    border-top-color: #a700d3 !important;
}

.inbox .grid.bottom.purple > .grid-body {
    border-bottom-color: #a700d3 !important;
}

.inbox .grid.top.red > .grid-header {
    border-top-color: #dc1200 !important;
}

.inbox .grid.bottom.red > .grid-body {
    border-bottom-color: #dc1200 !important;
}

.inbox .grid.top.orange > .grid-header {
    border-top-color: #f46100 !important;
}

.inbox .grid.bottom.orange > .grid-body {
    border-bottom-color: #f46100 !important;
}

.inbox .grid.no-border > .grid-header {
    border-bottom: 0px !important;
}

.inbox .grid.top > .grid-header {
    border-top-width: 4px !important;
    border-top-style: solid !important;
}

.inbox .grid.bottom > .grid-body {
    border-bottom-width: 4px !important;
    border-bottom-style: solid !important;
}
    
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="inbox">
    

    <div class="container">
    <div class="row">
        <!-- BEGIN INBOX -->
        <div class="col-md-12">
            <div class="grid email">
                <div class="grid-body">
                    <div class="row">
                        <!-- BEGIN INBOX MENU -->
                        <div class="col-md-3">
                            <h2 class="grid-title"><i class="fa fa-inbox"></i> Inbox</h2>
                            <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i>&nbsp;&nbsp;NEW MESSAGE</a>

                            <hr>

                            <div class="own-nav">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="header">Folders</li>
                                    <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox (14)</a></li>
                                    <li><a href="#"><i class="fa fa-star"></i> Starred</a></li>
                                    <li><a href="#"><i class="fa fa-bookmark"></i> Important</a></li>
                                    <li><a href="#"><i class="fa fa-mail-forward"></i> Sent</a></li>
                                    <li><a href="#"><i class="fa fa-pencil-square-o"></i> Drafts</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END INBOX MENU -->
                        
                        <!-- BEGIN INBOX CONTENT -->
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label style="margin-right: 8px;" class="">
                                        <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="check-all" class="icheck" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                                    </label>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu own-dropdown" role="menu">
                                            <li><a href="#">Mark as read</a></li>
                                            <li><a href="#">Mark as unread</a></li>
                                            <li><a href="#">Mark as important</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Report spam</a></li>
                                            <li><a href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6 search-form">
                                    <form action="#" class="text-right">
                                        <div class="input-group">
                                            <input type="text" class="form-control input-sm" placeholder="Search">
                                            <button type="submit" class="btn btn-inbox-search"><span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 48 49.717"><path id="search" d="M48.254,45.285,36.421,32.978a20.065,20.065,0,1,0-15.364,7.169,19.858,19.858,0,0,0,11.5-3.632l11.923,12.4a2.618,2.618,0,1,0,3.774-3.63ZM21.057,5.237A14.837,14.837,0,1,1,6.221,20.073,14.853,14.853,0,0,1,21.057,5.237Z" transform="translate(-0.984)" fill="#F8DA48"></path></svg></span></button>
                                        </div>           
                                    </form>
                                </div>
                            </div>
                            
                            <div class="padding"></div>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody><tr>
                                        <td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star-o"></i></td>
                                        <td class="action"><i class="fa fa-bookmark-o"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star-o"></i></td>
                                        <td class="action"><i class="fa fa-bookmark"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="action"><div class="icheckbox_square-blue" st<td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star"></i></td>
                                        <td class="action"><i class="fa fa-bookmark"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star-o"></i></td>
                                        <td class="action"><i class="fa fa-bookmark-o"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star-o"></i></td>
                                        <td class="action"><i class="fa fa-bookmark-o"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star-o"></i></td>
                                        <td class="action"><i class="fa fa-bookmark"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star"></i></td>
                                        <td class="action"><i class="fa fa-bookmark-o"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star-o"></i></td>
                                        <td class="action"><i class="fa fa-bookmark-o"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star"></i></td>
                                        <td class="action"><i class="fa fa-bookmark"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td class="action"><input type="checkbox" /></td>
                                        <td class="action"><i class="fa fa-star"></i></td>
                                        <td class="action"><i class="fa fa-bookmark-o"></i></td>
                                        <td class="name"><a href="#">Larry Gardner</a></td>
                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </a></td>
                                        <td class="time">08:30 PM</td>
                                    </tr>
                                </tbody></table>
                            </div>

                            <ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>                       
                        </div>
                        <!-- END INBOX CONTENT -->
                        
                        <!-- BEGIN COMPOSE MESSAGE -->
                        <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-wrapper">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-blue">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title"><i class="fa fa-envelope"></i> Compose New Message</h4>
                                        </div>
                                        <form action="#" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input name="to" type="email" class="form-control" placeholder="To">
                                                </div>
                                                <div class="form-group">
                                                    <input name="cc" type="email" class="form-control" placeholder="Cc">
                                                </div>
                                                <div class="form-group">
                                                    <input name="bcc" type="email" class="form-control" placeholder="Bcc">
                                                </div>
                                                <div class="form-group">
                                                    <input name="subject" type="email" class="form-control" placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
                                                </div>
                                                <div class="form-group">                                                        <input type="file" name="attachment">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-envelope"></i> Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END COMPOSE MESSAGE -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END INBOX -->
    </div>
    </div>
</div>