<div id="sample">Sample app text here</div>

<div>
    <button>Ajouté</button>
    <div>
            <NcSelect v-model="active" :options="['search-tab', 'settings-tab', 'share-tab']" />
            <NcAppSidebar
                name="cat-picture.jpg"
                subname="last edited 3 weeks ago"
                :active.sync="active">
                <NcAppSidebarTab name="Search" id="search-tab">
                    <template #icon>
                        <Magnify :size="20" />
                    </template>
                    Search tab content
                </NcAppSidebarTab>
                <NcAppSidebarTab name="Settings" id="settings-tab">
                    <template #icon>
                        <Cog :size="20" />
                    </template>
                    Settings
                </NcAppSidebarTab>
                <NcAppSidebarTab name="Sharing" id="share-tab">
                    <template #icon>
                        <ShareVariant :size="20" />
                    </template>
                    Sharing tab content
                </NcAppSidebarTab>
            </NcAppSidebar>
        </div>    
    <script>
    import Magnify from 'vue-material-design-icons/Magnify'
    import Cog from 'vue-material-design-icons/Cog'
    import ShareVariant from 'vue-material-design-icons/ShareVariant'

    export default {
        components: {
            Magnify,
            Cog,
            ShareVariant,
        },
        data() {
            return {
                active: 'search-tab',
            }
        },
    }
    </script>
</div>