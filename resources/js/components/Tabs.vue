<template>
    <div>
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <ul class="nav nav-tabs" role="tablist">
                    <li v-for="tab in tabs" :key="tab.name" :class="{ 'active': tab.isActive }" role="presentation">
                        <a role="tab" :aria-controls="tab.name" @click="activeTab = tab.name">
                            <i v-if="tab.icon" :class="['fa', 'fa-fw', tab.icon]"></i>
                            {{ tab.text || tab.name }}&nbsp;
                        </a>
                    </li>
                    <li class="pull-right">
                        <slot name="header"></slot>
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Tabs",
        props: {selected: String},
        data() {
            return {
                tabs: [],
                activeTab: null
            };
        },
        created() {
            this.tabs = this.$children;
        },
        mounted() {
            this.activeTab = this.selected;
        },
        watch: {
            selected(name) {
                this.activeTab = name
            },
            activeTab(name) {
                this.tabs.forEach(tab => tab.isActive = (tab.name === name));
                this.$emit('tab-selected', name)
            }
        }
    }
</script>

<style scoped>
.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
    border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
    margin-bottom: -1px;
}
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
    background-color: #ddd;
    border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
    color: #555;
    background-color: #fff;
    border-color: #ddd;
    border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}
</style>
