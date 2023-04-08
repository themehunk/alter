import {Fragment} from '@wordpress/element';
import { __ } from '@wordpress/i18n';

const SidebarContent = () => {
    return (
        <Fragment>
            <div className="sidebar-option-content-wrp">
               <div className="content-box">
                <h3> { __( 'ThemeHunk Premium Themes', 'alter' )}</h3>
                <p>{__( 'ThemeHunk specializes in creating premium WordPress themes and plugins. We offer extensive documentation, video tutorials, and a dedicated support team to help users with any questions or issues they may encounter.', 'alter' )}</p>
                <a href="https://themehunk.com/pro-wordpress-themes/" target="_blank" className="content-link button"> {__( 'View Premium Themes', 'alter' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Leave us a review', 'alter' )}</h3>
                <p>{__( 'We would love to hear your feedback.', 'alter' )}</p>
                <a href="#" className="content-link" target="_blank"> {__( 'Submit review', 'alter' )}</a>
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