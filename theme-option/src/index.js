import { render, Fragment, Component } from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import OptionPanel from './OptionPanel';
import './style.css';

class Alter_option_panel extends Component {
    render() {
        return (
            <Fragment>
                <OptionPanel />
            </Fragment>
        );
    }

}

document.addEventListener( "DOMContentLoaded", function(event) {
    render(
        <Alter_option_panel />,
        document.getElementById( 'alter-theme-setting-page' )
        )
    }
);