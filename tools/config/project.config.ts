import {join} from 'path';
import {SeedConfig} from './seed.config';
import {InjectableDependency} from './seed.config.interfaces';

export class ProjectConfig extends SeedConfig {
  PROJECT_TASKS_DIR = join(process.cwd(), this.TOOLS_DIR, 'tasks', 'project');

  constructor() {
    super();
    // this.APP_TITLE = 'Put name of your app here';
    let additionalDeps: InjectableDependency[] = [
      { src: 'ng2-bootstrap/bundles/ng2-bootstrap', inject: 'lib' },
      { src: 'bootstrap/dist/css/bootstrap.css', inject: true },
      { src: 'font-awesome/css/font-awesome.min.css', inject: true }
    ];

    const seedDependencies = this.NPM_DEPENDENCIES;

    this.NPM_DEPENDENCIES = seedDependencies.concat(additionalDeps);

    const seedAssets = this.APP_ASSETS;

    this.APP_ASSETS = seedAssets.concat([
      { src: `${this.CSS_SRC}/sb-admin-2.css`, inject: true, vendor: false }
    ]);
  }
}
