"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
var platform_browser_1 = require("@angular/platform-browser");
var core_1 = require("@angular/core");
// FORM CONTROL
var autocomplete_1 = require("@angular/material/autocomplete");
var checkbox_1 = require("@angular/material/checkbox");
var datepicker_1 = require("@angular/material/datepicker");
var form_field_1 = require("@angular/material/form-field");
var input_1 = require("@angular/material/input");
var radio_1 = require("@angular/material/radio");
var select_1 = require("@angular/material/select");
var slider_1 = require("@angular/material/slider");
var slide_toggle_1 = require("@angular/material/slide-toggle");
// NAVIGATION
var menu_1 = require("@angular/material/menu");
var sidenav_1 = require("@angular/material/sidenav");
var toolbar_1 = require("@angular/material/toolbar");
// LAYOUT
var card_1 = require("@angular/material/card");
var divider_1 = require("@angular/material/divider");
var expansion_1 = require("@angular/material/expansion");
var grid_list_1 = require("@angular/material/grid-list");
var list_1 = require("@angular/material/list");
var stepper_1 = require("@angular/material/stepper");
var tabs_1 = require("@angular/material/tabs");
var tree_1 = require("@angular/material/tree");
// BUTTON AND INDICATORS
var button_1 = require("@angular/material/button");
var button_toggle_1 = require("@angular/material/button-toggle");
var badge_1 = require("@angular/material/badge");
var chips_1 = require("@angular/material/chips");
var icon_1 = require("@angular/material/icon");
var progress_spinner_1 = require("@angular/material/progress-spinner");
var progress_bar_1 = require("@angular/material/progress-bar");
// POPUP AND MODALS
var bottom_sheet_1 = require("@angular/material/bottom-sheet");
var dialog_1 = require("@angular/material/dialog");
var snack_bar_1 = require("@angular/material/snack-bar");
var tooltip_1 = require("@angular/material/tooltip");
// DATA TABLE
var paginator_1 = require("@angular/material/paginator");
var sort_1 = require("@angular/material/sort");
var table_1 = require("@angular/material/table");
var app_routing_module_1 = require("./app-routing.module");
var app_component_1 = require("./app.component");
var animations_1 = require("@angular/platform-browser/animations");
var header_component_1 = require("./components/header/header.component");
var footer_component_1 = require("./components/footer/footer.component");
var home_component_1 = require("./components/home/home.component");
var notfound_component_1 = require("./components/notfound/notfound.component");
var AppModule = /** @class */ (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        core_1.NgModule({
            declarations: [
                app_component_1.AppComponent,
                header_component_1.HeaderComponent,
                footer_component_1.FooterComponent,
                home_component_1.HomeComponent,
                notfound_component_1.NotfoundComponent
            ],
            imports: [
                platform_browser_1.BrowserModule,
                app_routing_module_1.AppRoutingModule,
                animations_1.BrowserAnimationsModule,
                toolbar_1.MatToolbarModule,
                autocomplete_1.MatAutocompleteModule,
                checkbox_1.MatCheckboxModule,
                datepicker_1.MatDatepickerModule,
                form_field_1.MatFormFieldModule,
                input_1.MatInputModule,
                radio_1.MatRadioModule,
                select_1.MatSelectModule,
                slider_1.MatSliderModule,
                slide_toggle_1.MatSlideToggleModule,
                menu_1.MatMenuModule,
                sidenav_1.MatSidenavModule,
                toolbar_1.MatToolbarModule,
                card_1.MatCardModule,
                divider_1.MatDividerModule,
                expansion_1.MatExpansionModule,
                grid_list_1.MatGridListModule,
                list_1.MatListModule,
                stepper_1.MatStepperModule,
                tabs_1.MatTabsModule,
                tree_1.MatTreeModule,
                button_1.MatButtonModule,
                button_toggle_1.MatButtonToggleModule,
                badge_1.MatBadgeModule,
                chips_1.MatChipsModule,
                icon_1.MatIconModule,
                progress_spinner_1.MatProgressSpinnerModule,
                progress_bar_1.MatProgressBarModule,
                bottom_sheet_1.MatBottomSheetModule,
                dialog_1.MatDialogModule,
                snack_bar_1.MatSnackBarModule,
                tooltip_1.MatTooltipModule,
                paginator_1.MatPaginatorModule,
                sort_1.MatSortModule,
                table_1.MatTableModule,
            ],
            providers: [],
            bootstrap: [app_component_1.AppComponent]
        })
    ], AppModule);
    return AppModule;
}());
exports.AppModule = AppModule;
//# sourceMappingURL=app.module.js.map