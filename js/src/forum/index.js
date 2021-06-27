import app from 'flarum/forum/app';
import { override } from 'flarum/common/extend';
import Application from 'flarum/common/Application';

app.initializers.add('fof/ban-ips', () => {
    override(Application.prototype, 'updateTitle', function (original) {
        const count = this.titleCount ? `(${this.titleCount}) ` : '';
        const pageTitle = this.title && m.route.get() !== this.forum.attribute('basePath') + '/' ? this.title : '';
        const title = this.forum.attribute('title');

        const titleForDisplay = pageTitle ? pageTitle : title;
        document.title = count + titleForDisplay;
    });
});
