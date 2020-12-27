<template>
    <div class="dropdown nav-item">
        <!--begin::Toggle-->
        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
            <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                <div>
                    <i class="fa fa-bell text-danger"></i>
                </div>
                <strong class="notification-counter text-dark">{{notifications.length}}</strong>
                <span class="pulse-ring"></span>
            </div>
        </div>
        <!--end::Toggle-->
        <!--begin::Dropdown-->
        <div class=" dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
            <!--begin::Header-->
            <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top"
                 v-bind:style="{ backgroundImage: 'url(../../assets/media/misc/bg-1.jpg)' }">
                <!--begin::Title-->
                <h4 class="d-flex flex-center rounded-top">
                    <span class="text-white">User Notifications</span>
                    <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">{{notifications.length}}
                                new</span>
                </h4>
                <!--end::Title-->
                <!--begin::Tabs-->
                <!--end::Tabs-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->

            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane active show p-8" id="topbar_notifications_notifications"
                     role="tabpanel">
                    <!--begin::Scroll-->
                    <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300"
                         data-mobile-height="200">
                        <a href="../../markasread" >
                            <div class="d-flex align-items-center mb-6" v-for="notification in notifications"
                                 :key="notification.data">
                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <div
                                            class="text-dark text-hover-primary mb-1 font-size-lg">
                                        {{JSON.parse(notification.data).title}}
                                    </div>
                                    <span class="text-muted">{{JSON.parse(notification.data).description}} {{JSON.parse(notification.data)[0]}}
                                    <hr style="width: 150%">
                                    </span>
                                </div>
                                <!--end::Text-->

                            </div>
                        </a>
                    </div>

                </div>
                <!--end::Tabpane-->
            </div>

            <!--end::Content-->
        </div>
        <!--end::Dropdown-->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                notifications: {},
            }
        },
        methods: {
            loadNotification() {
                axios.get('/notification').then(({data}) => (this.notifications = data.data));
            },
            markasread(){
                this.get('/markasread');
            }
        },
        created() {

            setInterval(() => this.loadNotification(), 3000);
        },
    }
</script>