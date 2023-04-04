import {Fragment} from '@wordpress/element';
import { __ } from '@wordpress/i18n';

const SidebarContent = () => {
    return (
        <Fragment>
            <div className="sidebar-option-content-wrp">
               <div className="content-box">
                <h3> {wpapi.themeName}{ __( ' Premium Theme', 'alter' )}</h3>
                <p>{__( 'You’re using the free version of the alter Theme with limited features and functionality. You can upgrade to alter Pro Theme for Advanced features, Custom Sections, and more useful options to customize your website easily.', 'alter' )}</p>
                <a href="https://themehunk.com/templates/alter-pro/" target="_blank" className="content-link button"> {__( 'Upgrade To Pro', 'alter' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Why Upgrade?', 'alter' )}</h3>
                <p>{__( 'Upgrading to alter Premium you will unlock dozen of unique features that will take your website to the next level. See the Comparison table for more details.', 'alter' )}</p>
                <a href="https://themehunk.com/templates/alter-pro/" target="_blank" className="content-link button"> {__( 'Pro Demo', 'alter' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Leave us a review', 'alter' )}</h3>
                <p>{__( 'We would love to hear your feedback.', 'alter' )}</p>
                <a href="https://wordpress.org/support/theme/alter/reviews/?filter=5" className="content-link"> {__( 'Submit review', 'alter' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Video Tutorials', 'alter' )}</h3>
                <p>{__( 'Want a guide? We have video tutorials to walk you through getting started.', 'alter' )}</p>
                <a href="https://www.youtube.com/watch?v=EbH5CRujnYQ" target="_blank" className="content-link"> {__( 'Watch Videos', 'alter' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Support', 'alter' )}</h3>
                <p>{__( 'Have a question, we are happy to help! Get in touch with our support team.', 'alter' )}</p>
                <a href="https://themehunk.com/contact-us/" target="_blank" className="content-link"> {__( 'Submit a Ticket', 'alter' )}</a>
               </div>
            </div>
        </Fragment>
    );
};

export default SidebarContent;