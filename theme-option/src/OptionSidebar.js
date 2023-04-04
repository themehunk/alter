import {Fragment} from '@wordpress/element';
import SidebarContent from './SidebarContent';

const OptionSidebar = () => {
    return (
        <Fragment>
            <div className="alter-theme-sidebar-contnet">
               <SidebarContent/>
            </div>
        </Fragment>
    );
};
export default OptionSidebar;