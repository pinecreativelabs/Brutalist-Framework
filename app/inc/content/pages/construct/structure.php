	<h3 class="fluid-text monolisk" id="structure"><strong>Structure</strong></h3>
	<p class="bitstream">There are two primary directories that make up the framework structure: <em>app</em> and <em>core</em>. The <em>app</em> directory is for files that will be frequently modified, whereas the <em>core</em> is for files that are static and unchanging. Below is an overview of the file structure.</p>
	<div class="flex bitstream"><div class="padded half">
		<h4 class="flow-text charcoal">File Structure</h4>
		<ul class="none files">
			<li><i class="folder-plain-open"></i> /app
				<ul class="indent none">
					<li><i class="folder-plain-open"></i> /data</li>
					<li><i class="folder-plain-open"></i> /files</li>
					<li><i class="folder-plain-open"></i> /inc</li>
					<li><i class="folder-plain-open"></i> /themes</li>
				</ul>
			</li>
			<li><i class="folder-plain-open"></i> /bos
				<ul class="none indent">
					<li><i class="folder-plain-open"></i> /build
						<ul class="none indent">
							<li><i class="folder-plain"></i> /constructors</li>
							<li><i class="folder-plain"></i> /data</li>
							<li><i class="folder-plain"></i> /helpers</li>
						</ul>
					</li>
					<li><i class="folder-plain-open"></i> /core
						<ul class="none indent">
							<li><i class="folder-plain"></i> /css</li>
							<li><i class="folder-plain"></i> /data</li>
							<li><i class="folder-plain"></i> /files</li>
							<li><i class="folder-plain"></i> /jab</li>
						</ul>
					</li>
					<li><i class="folder-plain"></i> /molds</li>
				</ul>
			</li>
			<li><i class="php"></i> index.php</li>
			<li><i class="php"></i> php_boilerplate.php</li>
			<li><i class="html"></i> boilerplate.html</li>
		</ul>
		
	</div><div class="padded half">
		<h4 class="flow-text charcoal">App Directory</h4>
		<p class="bitstream">The <em>app</em> directory contains theme files, custom data, additional files, and PHP content to be included on pages. Some example files are included as part of the downloaded package.</p>
		<p class="padded disabled box-s-k" style="margin-top: 1rem;">
			<strong>Data Folder</strong><br /><small>Contains data files (ex. CSV, XML, etc), to be used throughout app.</small><br /><br />
			<strong>Files Folder</strong><br /><small>Miscellaneous files (images, audio, video, documents, etc.).</small><br /><br />
			<strong>Inc Folder</strong><br /><small>PHP-based content (pages and UI components) and custom PHP function files to be included on main pages or for use within an AJAX interface.</small><br /><br />
			<strong>Themes Folder</strong><br /><small>Any custom CSS, javascript, and other media files.</small>
		</p>
		<p style="margin-top: 1rem;">It is up to you how you organize the <strong><em>app</em></strong> directory. The idea is to store files here that will likely be frequently changed or updated.</p>
		<p class="spacer"></p>
		<h4 class="flow-text charcoal">Core Directory</h4>
		<p class="bitstream">The <em>core</em> directory contains all core CSS, javascript, files, data, and PHP scripts. Files in this directory are for static (unchanging) reference. More details are provided in the following sections.</p>
	</div></div>