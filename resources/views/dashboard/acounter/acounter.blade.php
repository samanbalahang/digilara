@extends('dashboard.layout.master')

@section("main")
<div class="containerfluid px-3 bg-black">
    <div class="row">
      @include('dashboard.layout.aside')
       <div class="col-68 col-md-68 p-0 bg-gray">
            <main class="tab-content" id="A" style="margin-top: 58px">
                <div class="tab-content" id="myTabContent0">
                    <!-- dashboard -->
                    <div aria-labelledby="home-tab0" class="tab-pane fade show active p-3" id="home0" role="tabpanel">

                        <!-- Section: Main chart -->
                        <section class="mb-4">
                            <div class="card">
                                <div class="card-header py-3">
                                    <h5 class="mb-0 text-center"><strong>Sales</strong></h5>
                                </div>
                                <div class="card-body">
                                    <canvas class="my-4 w-100" height="380" id="myChart"></canvas>
                                </div>
                            </div>
                        </section>
                        <!-- Section: Main chart -->

                        <!--Section: Sales Performance KPIs-->
                        <section class="mb-4">
                            <div class="card">
                                <div class="card-header text-center py-3">
                                    <h5 class="mb-0 text-center">
                                        <strong>Sales Performance KPIs</strong>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th id="" scope="col"></th>
                                                <th scope="col">Product Detail Views</th>
                                                <th scope="col">Unique Purchases</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Product Revenue</th>
                                                <th scope="col">Avg. Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">Value</th>
                                                <td>18,492</td>
                                                <td>228</td>
                                                <td>350</td>
                                                <td>$4,787.64</td>
                                                <td>$13.68</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Percentage change</th>
                                                <td>
                        <span class="text-danger">
                          <i class="fas fa-caret-down me-1"></i><span>-48.8%%</span>
                        </span>
                                                </td>
                                                <td>
                        <span class="text-success">
                          <i class="fas fa-caret-up me-1"></i><span>14.0%</span>
                        </span>
                                                </td>
                                                <td>
                        <span class="text-success">
                          <i class="fas fa-caret-up me-1"></i><span>46.4%</span>
                        </span>
                                                </td>
                                                <td>
                        <span class="text-success">
                          <i class="fas fa-caret-up me-1"></i><span>29.6%</span>
                        </span>
                                                </td>
                                                <td>
                        <span class="text-danger">
                          <i class="fas fa-caret-down me-1"></i><span>-11.5%</span>
                        </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Absolute change</th>
                                                <td>
                        <span class="text-danger">
                          <i class="fas fa-caret-down me-1"></i><span>-17,654</span>
                        </span>
                                                </td>
                                                <td>
                        <span class="text-success">
                          <i class="fas fa-caret-up me-1"></i><span>28</span>
                        </span>
                                                </td>
                                                <td>
                        <span class="text-success">
                          <i class="fas fa-caret-up me-1"></i><span>111</span>
                        </span>
                                                </td>
                                                <td>
                        <span class="text-success">
                          <i class="fas fa-caret-up me-1"></i><span>$1,092.72</span>
                        </span>
                                                </td>
                                                <td>
                        <span class="text-danger">
                          <i class="fas fa-caret-down me-1"></i><span>$-1.78</span>
                        </span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--Section: Sales Performance KPIs-->

                        <!--Section: Minimal statistics cards-->
                        <section>
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div class="align-self-center">
                                                    <i class="fas fa-pencil-alt text-info fa-3x"></i>
                                                </div>
                                                <div class="text-end">
                                                    <h3>278</h3>
                                                    <p class="mb-0">New Posts</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div class="align-self-center">
                                                    <i class="far fa-comment-alt text-warning fa-3x"></i>
                                                </div>
                                                <div class="text-end">
                                                    <h3>156</h3>
                                                    <p class="mb-0">New Comments</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div class="align-self-center">
                                                    <i class="fas fa-chart-line text-success fa-3x"></i>
                                                </div>
                                                <div class="text-end">
                                                    <h3>64.89 %</h3>
                                                    <p class="mb-0">Bounce Rate</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div class="align-self-center">
                                                    <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                                                </div>
                                                <div class="text-end">
                                                    <h3>423</h3>
                                                    <p class="mb-0">Total Visits</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-danger">278</h3>
                                                    <p class="mb-0">New Projects</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-rocket text-danger fa-3x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-success">156</h3>
                                                    <p class="mb-0">New Clients</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="far fa-user text-success fa-3x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-warning">64.89 %</h3>
                                                    <p class="mb-0">Conversion Rate</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-chart-pie text-warning fa-3x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-info">423</h3>
                                                    <p class="mb-0">Support Tickets</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="far fa-life-ring text-info fa-3x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-info">278</h3>
                                                    <p class="mb-0">New Posts</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-book-open text-info fa-3x"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div aria-valuemax="100" aria-valuemin="0"
                                                         aria-valuenow="80" class="progress-bar bg-info"
                                                         role="progressbar" style="width: 80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-warning">156</h3>
                                                    <p class="mb-0">New Comments</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="far fa-comments text-warning fa-3x"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div aria-valuemax="100" aria-valuemin="0"
                                                         aria-valuenow="35" class="progress-bar bg-warning"
                                                         role="progressbar" style="width: 35%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-success">64.89 %</h3>
                                                    <p class="mb-0">Bounce Rate</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-mug-hot text-success fa-3x"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div aria-valuemax="100" aria-valuemin="0"
                                                         aria-valuenow="60" class="progress-bar bg-success"
                                                         role="progressbar" style="width: 60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-danger">423</h3>
                                                    <p class="mb-0">Total Visits</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-map-signs text-danger fa-3x"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div aria-valuemax="100" aria-valuemin="0"
                                                         aria-valuenow="40" class="progress-bar bg-danger"
                                                         role="progressbar" style="width: 40%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--Section: Minimal statistics cards-->

                        <!--Section: Statistics with subtitles-->
                        <section>
                            <div class="row">
                                <div class="col-xl-6 col-md-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between p-md-1">
                                                <div class="d-flex flex-row">
                                                    <div class="align-self-center">
                                                        <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                                                    </div>
                                                    <div>
                                                        <h4>Total Posts</h4>
                                                        <p class="mb-0">Monthly blog posts</p>
                                                    </div>
                                                </div>
                                                <div class="align-self-center">
                                                    <h2 class="h1 mb-0">18,000</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between p-md-1">
                                                <div class="d-flex flex-row">
                                                    <div class="align-self-center">
                                                        <i class="far fa-comment-alt text-warning fa-3x me-4"></i>
                                                    </div>
                                                    <div>
                                                        <h4>Total Comments</h4>
                                                        <p class="mb-0">Monthly blog posts</p>
                                                    </div>
                                                </div>
                                                <div class="align-self-center">
                                                    <h2 class="h1 mb-0">84,695</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between p-md-1">
                                                <div class="d-flex flex-row">
                                                    <div class="align-self-center">
                                                        <h2 class="h1 mb-0 me-4">$76,456.00</h2>
                                                    </div>
                                                    <div>
                                                        <h4>Total Sales</h4>
                                                        <p class="mb-0">Monthly Sales Amount</p>
                                                    </div>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="far fa-heart text-danger fa-3x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between p-md-1">
                                                <div class="d-flex flex-row">
                                                    <div class="align-self-center">
                                                        <h2 class="h1 mb-0 me-4">$36,000.00</h2>
                                                    </div>
                                                    <div>
                                                        <h4>Total Cost</h4>
                                                        <p class="mb-0">Monthly Cost</p>
                                                    </div>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-wallet text-success fa-3x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- post -->
                    <div aria-labelledby="profile-tab0" class="tab-pane fade p-3" id="profile0" role="tabpanel">
                        <section class="mb-4">
                            <div class="card p-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <div class="addPost-container">
                                                <a class="btn btn-success nav-link" id="addpost-tab0" type="submit"
                                                   value="افزدن پست">
                                                    <i class="fas fa-plus"></i><span class="p-3">افزدن پست</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table class="display data-table" id="example" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th id="tableIds"></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sydney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sydney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td></td>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </section>
                    </div>

                    <!-- addpost -->
                    <div aria-labelledby="addpost-tab0" class="tab-pane fade p-3" id="addpost0" role="tabpanel">
                        <section class="mb-4">
                            <div class="card py-5 px-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="addPost-container">
                                                <a class="btn btn-warning nav-link" id="showpost-tab0" type="submit">
                                                    <i class="fas fa-redo"></i><span
                                                        class="p-3">مشاهده همه پست ها</span></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="addPost-container">

                                                <button class="btn btn-success btn-block" type="submit">ثبت</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="form-part">
                                    <form action="" enctype="multipart/form-data">
                                        <div class="form-outline mb-4">
                                            <input class="form-control" id="postTitles" type="email"/>
                                            <label class="form-label" for="postTitles">عنوان</label>
                                        </div>

                                        <!-- post url -->
                                        <div class="form-outline mb-4">
                                            <input aria-label="readonly input example" class="form-control"
                                                   id="postUrls"
                                                   placeholder="Readonly input here..."
                                                   readonly type="url"/>
                                            <label class="form-label" for="postUrls">آدرس</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="postContents" rows="4"></textarea>
                                            <label class="form-label" for="postContents">محتوا</label>
                                        </div>

                                        <div class="form-outline mb-4 d-none">
                                            <input accept="image/*" class="form-control" id="postfutureImgs"
                                                   type="file"/>
                                            <label class="form-label" for="postfutureImgs">تصویر شاخص</label>
                                        </div>


                                        <div class="form-outline mb-4">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="show-future-img border border-warning p-3">
                                                            <p>
                                                                عکس شاخص
                                                            </p>
                                                            <div class="future-img-container">
                                                                <img alt="Placeholder" id="postfutureImgsrcs"
                                                                     src="img/sample.jpg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="show-category border border-warning p-3">
                                                            <div class="d-flex">
                                                                <p>
                                                                    دسته بندی ها:
                                                                <ul class="chosen-post-cat">
                                                                    <li><a href="#">
                                                                            بدون دسته بندی
                                                                        </a></li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                            <p>
                                                                انتخاب از دسته بندی های پرکاربرد:
                                                            </p>
                                                            <ul class="post-category">
                                                                <li><a href="#">
                                                                        بدون دسته بندی
                                                                    </a></li>
                                                            </ul>
                                                            <p><a class="btn btn-success" href="#" id="addPostCats">افزودن
                                                                    دسته بندی</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- form-outline mb-4 -->

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="postPublishedes">نحوه انتشار:</label>
                                            <select class="form-control" id="postPublishedes">
                                                <option disabled selected>
                                                    انتخاب کنید...
                                                </option>
                                                <option>
                                                    انتشار
                                                </option>
                                                <option>
                                                    آرشیو
                                                </option>
                                                <option>
                                                    ذخیره
                                                </option>
                                            </select>

                                        </div>
                                        <!-- Submit button -->
                                        <button class="btn btn-success btn-block" type="submit">ثبت</button>
                                    </form>
                                </section>
                            </div>
                        </section>
                    </div>

                    <!-- page -->
                    <div aria-labelledby="page-tab0" class="tab-pane fade p-3" id="page0" role="tabpanel">
                        <section class="mb-4">
                            <div class="card p-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <div class="addpage-container">
                                                <a class="btn btn-success nav-link" id="addpage-tab0" type="submit"
                                                   value="افزدن صفحه">
                                                    <i class="fas fa-plus"></i><span class="p-3">افزدن صفحه</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table class="display data-table" id="allpageds" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th id="tableIded"></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sydney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sydney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td></td>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </section>
                    </div>

                    <!-- addpage -->
                    <div aria-labelledby="addpage-tab0" class="tab-pane fade p-3" id="addpage0" role="tabpanel">
                        <section class="mb-4">
                            <div class="card py-5 px-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="addPost-container">
                                                <a class="btn btn-warning nav-link" type="submit">
                                                    <i class="fas fa-redo"></i><span
                                                        class="p-3">مشاهده همه صقحه ها</span></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="addPost-container">

                                                <button class="btn btn-success btn-block" type="submit">ثبت</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="form-part">
                                    <form action="" enctype="multipart/form-data">
                                        <div class="form-outline mb-4">
                                            <input class="form-control" id="postTitled" type="email"/>
                                            <label class="form-label" for="postTitled">عنوان</label>
                                        </div>

                                        <!-- post url -->
                                        <div class="form-outline mb-4">
                                            <input aria-label="readonly input example" class="form-control"
                                                   id="postUrled"
                                                   placeholder="Readonly input here..."
                                                   readonly type="url"/>
                                            <label class="form-label" for="postUrled">آدرس</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="postContented" rows="4"></textarea>
                                            <label class="form-label" for="postContented">محتوا</label>
                                        </div>

                                        <div class="form-outline mb-4 d-none">
                                            <input accept="image/*" class="form-control" id="postfutureImged"
                                                   type="file"/>
                                            <label class="form-label" for="postfutureImged">تصویر شاخص</label>
                                        </div>


                                        <div class="form-outline mb-4">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="show-future-img border border-warning p-3">
                                                            <p>
                                                                عکس شاخص
                                                            </p>
                                                            <div class="future-img-container">
                                                                <img alt="Placeholder" id="postfutureImgsrced"
                                                                     src="img/sample.jpg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="show-category border border-warning p-3">
                                                            <div class="d-flex">
                                                                <p>
                                                                    دسته بندی ها:
                                                                <ul class="chosen-post-cat">
                                                                    <li><a href="#">
                                                                            بدون دسته بندی
                                                                        </a></li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                            <p>
                                                                انتخاب از دسته بندی های پرکاربرد:
                                                            </p>
                                                            <ul class="post-category">
                                                                <li><a href="#">
                                                                        بدون دسته بندی
                                                                    </a></li>
                                                            </ul>
                                                            <p><a class="btn btn-success" href="#" id="addPostCat">افزودن
                                                                    دسته بندی</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- form-outline mb-4 -->

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="postPublisheds">نحوه انتشار:</label>
                                            <select class="form-control" id="postPublisheds">
                                                <option disabled selected>
                                                    انتخاب کنید...
                                                </option>
                                                <option>
                                                    انتشار
                                                </option>
                                                <option>
                                                    آرشیو
                                                </option>
                                                <option>
                                                    ذخیره
                                                </option>
                                            </select>

                                        </div>
                                        <!-- Submit button -->
                                        <button class="btn btn-success btn-block" type="submit">ثبت</button>
                                    </form>
                                </section>
                            </div>
                        </section>
                    </div>

                    <!-- menu -->
                    <div aria-labelledby="contact-tab0" class="tab-pane fade p-3" id="contact0" role="tabpanel">
                        <section class="mb-4">
                            <div class="card py-5 px-3">
                                <p>انتخاب منو برای ویرایش</p>
                                <form action="" enctype="multipart/form-data">
                                    <select class="form-control" id="postPublisheder">
                                        <option disabled selected>
                                            انتخاب کنید...
                                        </option>
                                        <option>
                                            انتشار
                                        </option>
                                        <option>
                                            آرشیو
                                        </option>
                                        <option>
                                            ذخیره
                                        </option>
                                    </select>
                                    <button class="btn btn-success btn-block" type="submit">ویرایش</button>
                                </form>
                            </div>
                        </section>
                        <section>
                            <div class="container menu-base">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <div class="card py-5 px-3">
                                            <p>
                                                افزودن گزینه های فهرست
                                            </p>
                                            <div class="accordion bg-light" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button aria-controls="collapseOne" aria-expanded="true"
                                                                class="accordion-button"
                                                                data-mdb-target="#collapseOne"
                                                                data-mdb-toggle="collapse"
                                                                type="button">
                                                            برگه ها
                                                        </button>
                                                    </h2>
                                                    <div aria-labelledby="headingOne"
                                                         class="accordion-collapse collapse show"
                                                         data-mdb-parent="#accordionExample"
                                                         id="collapseOne">
                                                        <div class="accordion-body">
                                                            <div class="form-check">

                                                                <input class="form-check-input" id="flexCheckDefaultd"
                                                                       type="checkbox"
                                                                       value=""/>
                                                                <label class="form-check-label" for="flexCheckDefaultd">
                                                                    نام برگه

                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button aria-controls="collapseTwo" aria-expanded="false"
                                                                class="accordion-button collapsed"
                                                                data-mdb-target="#collapseTwo"
                                                                data-mdb-toggle="collapse"
                                                                type="button">
                                                            نوشته ها
                                                        </button>
                                                    </h2>
                                                    <div aria-labelledby="headingTwo"
                                                         class="accordion-collapse collapse"
                                                         data-mdb-parent="#accordionExample"
                                                         id="collapseTwo">
                                                        <div class="accordion-body">
                                                            <div class="form-check">

                                                                <input class="form-check-input" id="flexCheckDefaultdes"
                                                                       type="checkbox"
                                                                       value=""/>
                                                                <label class="form-check-label"
                                                                       for="flexCheckDefaultdes">
                                                                    نام نوشته

                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button aria-controls="collapseThree" aria-expanded="false"
                                                                class="accordion-button collapsed"
                                                                data-mdb-target="#collapseThree"
                                                                data-mdb-toggle="collapse"
                                                                type="button">
                                                            پیوند های دلخواه
                                                        </button>
                                                    </h2>
                                                    <div aria-labelledby="headingThree"
                                                         class="accordion-collapse collapse"
                                                         data-mdb-parent="#accordionExample"
                                                         id="collapseThree">
                                                        <div class="accordion-body">
                                                            <form action="">
                                                                <div class="form-outline mb-4 d-flex">
                                                                    <input class="form-control" id="postfutureImger"
                                                                           type="text"/>
                                                                    <label class="form-label" for="postfutureImger">عنوان</label>
                                                                </div>
                                                                <div class="form-outline mb-4 d-flex">
                                                                    <input class="form-control" id="postfutureImget"
                                                                           type="url"/>
                                                                    <label class="form-label" for="postfutureImget">آدرس
                                                                        پیوند</label>
                                                                </div>
                                                                <input class="form-control" id="menuLinkSubmit"
                                                                       type="submit" value="درج در منو"/>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingForth">
                                                        <button aria-controls="collapseForth" aria-expanded="false"
                                                                class="accordion-button collapsed"
                                                                data-mdb-target="#collapseForth"
                                                                data-mdb-toggle="collapse"
                                                                type="button">
                                                            دسته بندی ها
                                                        </button>
                                                    </h2>
                                                    <div aria-labelledby="headingForth"
                                                         class="accordion-collapse collapse"
                                                         data-mdb-parent="#accordionExample"
                                                         id="collapseForth">
                                                        <div class="accordion-body">
                                                            <div class="form-check">

                                                                <input class="form-check-input" id="flexCheckDefaultey"
                                                                       type="checkbox"
                                                                       value=""/>
                                                                <label class="form-check-label"
                                                                       for="flexCheckDefaultey">
                                                                    نام دسته

                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFifth">
                                                        <button aria-controls="collapseFifth" aria-expanded="false"
                                                                class="accordion-button collapsed"
                                                                data-mdb-target="#collapseFifth"
                                                                data-mdb-toggle="collapse"
                                                                type="button">
                                                            فروشگاه
                                                        </button>
                                                    </h2>
                                                    <div aria-labelledby="headingFifth"
                                                         class="accordion-collapse collapse"
                                                         data-mdb-parent="#accordionExample"
                                                         id="collapseFifth">
                                                        <div class="accordion-body">
                                                            <div class="form-check">

                                                                <input class="form-check-input" id="flexCheckDefault"
                                                                       type="checkbox"
                                                                       value=""/>
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    نام برگه

                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="card py-5 px-3">
                                            <p>
                                                ساختار فهرست
                                            </p>
                                            <div class="position-relative" id="menu-items-container">
                                                <div class="row" id="nested">
                                                    <p>
                                                        منو خود را مرتب کنید:
                                                    </p>
                                                    <ol class="serialization vertical position-relative">
                                                        <li data-id="0" data-name="Item 1">
                                                            Item 1
                                                            <ol></ol>
                                                        </li>
                                                        <li data-id="4" data-name="Item 5">
                                                            Item 5
                                                            <ol></ol>
                                                        </li>
                                                        <li data-id="1" data-name="Item 2">
                                                            Item 2
                                                        </li>
                                                        <li data-id="2" data-name="Item 3">
                                                            Item 3
                                                            <ol></ol>
                                                        </li>
                                                        <li data-id="3" data-name="Item 4">
                                                            Item 4
                                                            <ol>
                                                                <li data-id="3-0" data-name="Item 3.1">
                                                                    Item 3.1
                                                                </li>
                                                                <li data-id="3-1" data-name="Item 3.2">Item 3.2</li>
                                                                <li data-id="3-2" data-name="Item 3.3">Item 3.3</li>
                                                                <li data-id="3-3" data-name="Item 3.4">Item 3.4</li>
                                                                <li data-id="3-4" data-name="Item 3.5">Item 3.5</li>
                                                                <li data-id="3-5" data-name="Item 3.6">Item 3.6</li>
                                                            </ol>
                                                        </li>

                                                        <li data-id="5" data-name="Item 6">
                                                            Item 6
                                                        </li>
                                                    </ol>
                                                    <div id="serialize_output2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="savemenucontainer my-3">
                                                <a class="btn btn-success" href="" id="savemenu">ذخیره منو</a>
                                                <div id="printCode">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- users -->
                    <div aria-labelledby="users-tab0" class="tab-pane fade p-3" id="users0" role="tabpanel">
                        <section class="mb-4">
                            <div class="card p-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <div class="addpage-container">
                                                <a class="btn btn-success nav-link" id="addusers-tab0" type="submit">
                                                    <i class="fas fa-plus"></i><span class="p-3">افزدن کاربر</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table class="display data-table" id="allpages" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th id="tableId"></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sydney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sydney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td></td>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </section>
                    </div>

                    <!-- addusers -->
                    <div aria-labelledby="addusers-tab0" class="tab-pane fade p-3" id="addusers0" role="tabpanel">
                        <section class="mb-4">
                            <div class="card py-5 px-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="addusers-container">
                                                <a class="btn btn-warning nav-link" id="showpage-tab0" type="submit">
                                                    <i class="fas fa-redo"></i><span
                                                        class="p-3">مشاهده همه کاربران</span></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="addPost-container">

                                                <button class="btn btn-success btn-block" type="submit">ثبت</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="form-part">
                                    <form action="" enctype="multipart/form-data">
                                        <div class="form-outline mb-4">
                                            <input class="form-control" id="postTitle" type="email"/>
                                            <label class="form-label" for="postTitle">عنوان</label>
                                        </div>

                                        <!-- post url -->
                                        <div class="form-outline mb-4">
                                            <input aria-label="readonly input example" class="form-control" id="postUrl"
                                                   placeholder="Readonly input here..."
                                                   readonly type="url"/>
                                            <label class="form-label" for="postUrl">نام</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="postContent" rows="4"></textarea>
                                            <label class="form-label" for="postContent">توضیحات</label>
                                        </div>

                                        <div class="form-outline mb-4 d-none">
                                            <input accept="image/*" class="form-control" id="postfutureImg"
                                                   type="file"/>
                                            <label class="form-label" for="postfutureImg">تصویر پروفایل</label>
                                        </div>


                                        <div class="form-outline mb-4">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="show-future-img border border-warning p-3">
                                                            <p>
                                                                عکس پروفایل
                                                            </p>
                                                            <div class="future-img-container">
                                                                <img alt="Placeholder" id="postfutureImgsrc"
                                                                     src="img/sample.jpg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- form-outline mb-4 -->
                                        <!-- Submit button -->
                                        <button class="btn btn-success btn-block" type="submit">ثبت</button>
                                    </form>
                                </section>
                            </div>
                        </section>
                    </div>


                    <!-- settings -->
                    <div aria-labelledby="setting-tab0" class="tab-pane fade p-3" id="setting0" role="tabpanel">
                        <section class="mb-4">
                            <div class="card py-5 px-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="addsetting-container">
                                                <button class="btn btn-success btn-block" type="submit">ثبت</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="form-part">
                                    <form action="" enctype="multipart/form-data">
                                        <div class="form-outline mb-4">
                                            <input class="form-control" id="settingTitle" type="email"/>
                                            <label class="form-label" for="settingTitle">عنوان</label>
                                        </div>

                                        <!-- setting url -->
                                        <div class="form-outline mb-4">
                                            <input aria-label="readonly input example" class="form-control"
                                                   id="settingUrl"
                                                   placeholder="Readonly input here..."
                                                   readonly type="url"/>
                                            <label class="form-label" for="settingUrl">آدرس</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="settingContent" rows="4"></textarea>
                                            <label class="form-label" for="settingContent">محتوا</label>
                                        </div>

                                        <div class="form-outline mb-4 d-none">
                                            <input accept="image/*" class="form-control" id="settingfutureImg"
                                                   type="file"/>
                                            <label class="form-label" for="settingfutureImg">تصویر شاخص</label>
                                        </div>


                                        <div class="form-outline mb-4">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="show-future-img border border-warning p-3">
                                                            <p>
                                                                عکس شاخص
                                                            </p>
                                                            <div class="future-img-container">
                                                                <img alt="Placeholder" id="settingfutureImgsrc"
                                                                     src="img/sample.jpg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- form-outline mb-4 -->

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="postPublished">نحوه انتشار:</label>
                                            <select class="form-control" id="postPublished">
                                                <option disabled selected>
                                                    انتخاب کنید...
                                                </option>
                                                <option>
                                                    انتشار
                                                </option>
                                                <option>
                                                    آرشیو
                                                </option>
                                                <option>
                                                    ذخیره
                                                </option>
                                            </select>

                                        </div>
                                        <!-- Submit button -->
                                        <button class="btn btn-success btn-block" type="submit">ثبت</button>
                                    </form>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </main>
        </div>
    </div>
