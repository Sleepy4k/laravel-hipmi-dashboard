import {
  capitalizeFirstLetter,
  convertDateToLocaleString,
} from "@/utils/parse";
import FilterBar from "@/Components/FilterBar/FilterBar";
import Pagination from "@/Components/Pagination/Pagination";
import Table from "@/Components/Table/Table";
import { Link } from "@inertiajs/react";

interface ITableModeProps {
  data: any;
}

type TableData = {
  id: number;
  slug: string;
  title: string;
  content: string;
  created_at: string;
  updated_at: string;
};

export default function TableMode({ data }: ITableModeProps) {
  return (
    <div>
      <div className="flex items-center justify-between mb-6">
        <FilterBar />
        <Link
          className="btn-indigo focus:outline-none"
          href={route("activities.create")}
        >
          <span>Create</span>
        </Link>
      </div>
      <Table
        columns={[
          {
            label: "ID",
            name: "id",
            sortable: true,
          },
          {
            label: "Title",
            name: "title",
            sortable: true,
            sticky: true,
            renderCell(row) {
              return capitalizeFirstLetter(row.title) || "-";
            },
          },
          {
            label: "Content",
            name: "content",
            sortable: true,
            renderCell(row) {
              return row.content || "-";
            },
          },
          {
            label: "Created At",
            name: "created_at",
            sortable: true,
            renderCell(row) {
              return convertDateToLocaleString(row.created_at) || "-";
            },
          },
          {
            label: "Updated At",
            name: "updated_at",
            sortable: true,
            renderCell(row) {
              return convertDateToLocaleString(row.updated_at) || "-";
            },
          },
        ]}
        permission="activity.show"
        rows={data.data}
        getRowDetailsUrl={(row: TableData) =>
          route("activities.show", row.slug)
        }
      />
      <Pagination links={data.meta.links} />
    </div>
  );
}
